<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'cong-nghe'], function()
{
	Route::get('/', 'TechonogyController@index');
	Route::group(['prefix' => 'dien-thoai'], function() {
		Route::get('/android/{alias}', 'TechonogyController@android');
		Route::get('/window/{alias}', 'TechonogyController@window');
		Route::get('/ios/{alias}', 'TechonogyController@ios');
	});
});

Route::get('/', 'HomeController@index');
// Route::get('travel-to-vietnam' ,'VietnamController@index');
// Route::get('tour-to-sapa-from-hanoi', function(){
// 	return view('vietnam.detail');
// });

Route::group(['prefix' => 'vietnam'], function()
{
	Route::get('/', 'VietnamController@index');
	Route::get('{duration}', 'VietnamController@duration')->where('duration', 'tours-in-vietnam-[0-9]+day(s\b|\b)');
	Route::get('detail/{alias}', 'VietnamController@detail');
	Route::get('destination/{destination}', 'VietnamController@destination');
});

Route::get('search', 'SearchController@index');

Route::group(['prefix' => 'day-tour'], function()
{
	Route::get('/', 'VietnamController@day_tour');
	Route::get('detail/{alias}', 'VietnamController@day_tour_detail');
});

// Tour Booking
Route::get('booking/step2/{alias}', 'BookingController@step2');
Route::get('booking/step3/{alias}', 'BookingController@step3');
Route::resource('booking', 'BookingController');

// Tour Review
Route::resource('tour-reviews', 'TourReviewController');

// Tour Request
Route::get('customized-tours', 'TourRequestController@index');
Route::post('customized-tours', 'TourRequestController@store');

// Popular Tour
Route::get('popular-tours', function(){
	$tours = App\Tour::where('popular_tour', 1)->published()->get();
	return view('vietnam.popular', ['tours' => $tours]);
});

// About Us page
Route::get('about-us', function(){
	$content = DB::table('contents')->where('alias', 'about-us')->first();
	return view('layout.singleview', ['content' => $content]);
});


Route::resource('contact', 'ContactController');

// Admin authentication
Route::get('/administrator/login', 'Auth\AdminAuthController@getLogin');
Route::post('/administrator/login', 'Auth\AdminAuthController@doLogin');
Route::get('/administrator/logout', 'Auth\AdminAuthController@doLogout');

// Admin area
Route::group(['prefix' => 'administrator', 'namespace'=>'Admin', 'middleware' => 'admin'], function()
{
    Route::get('/', 'AdministratorController@index');

    Route::post('tour/set_active_status', 'TourController@setActiveStatus');
    Route::post('tour/delete-tours', 'TourController@deleteTours');
    Route::resource('tour', 'TourController');
	Route::resource('tour_review', 'TourReviewController');
	Route::resource('tour_request', 'TourRequestController');

	// Admin booking management
	Route::post('post/set_active_status', 'BookingController@setActiveStatus');
	Route::post('post/update_bookings', 'BookingController@updateBookings');
	Route::resource('booking', 'BookingController');

	// Admin Vietnam Destination
	Route::post('destination/set_active_status', 'DestinationController@setActiveStatus');
	Route::post('destination/update_destinations', 'DestinationController@updateDestinations');
	Route::resource('destination', 'DestinationController');

	Route::resource('contact', 'ContactController');

	// Admin Post
	Route::post('post/set_active_status', 'PostController@setActiveStatus');
	Route::post('post/update_posts', 'PostController@updatePosts');
	Route::resource('post', 'PostController');

	// Admin Post Category
	Route::post('category/set_active_status', 'CategoryController@setActiveStatus');
	Route::post('category/update_categories', 'CategoryController@updateCategories');
	Route::resource('category', 'CategoryController');

	// Admin Tour Reviews
	Route::post('review/set_active_status', 'TourReviewController@setActiveStatus');
	Route::post('review/update_reviews', 'TourReviewController@updateReviews');
	Route::resource('review', 'TourReviewController');

	// Admin Tour Request
	Route::get('request', 'TourRequestController@index');

	// Admin Change Password
	Route::get('changepassword', function(){
		return view('auth.changepassword');
	});

	Route::post('changepassword', function(){
		$input = Input::all();
		$user = Auth::user();

		if (!Hash::check($input['old_password'], $user->password)) {
			Session::flash('error_message', 'Your old password is not match! Please try again.');
		} else {
			$user->password = $input['new_password'];
			$user->save();
			Session::flash('success_message', 'Your password has been change successfully.');
		}
		return view('auth.changepassword');
	});
});

//Check url
Route::any('{all?}', 'HomeController@index')->where( 'all' , '(.*)' );