<?php $user = Auth::user(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Administrator Travel</title>

	{!! HTML::style('linecons.css') !!}
	{!! HTML::style('font-awesome.min.css') !!}
	{!! HTML::style('admin-bootstrap.css') !!}
	{!! HTML::style('admin-core.css') !!}
	{!! HTML::style('admin-forms.css') !!}
	{!! HTML::style('admin-components.css') !!}
	{!! HTML::style('admin-style.css') !!}
	{!! HTML::style('admin-responsive.css') !!}

	{!! HTML::script('jquery.min.js') !!}
	{!! HTML::script('bootstrap.min.js') !!}

	{{-- Facebook api --}}

	<script>
		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});
	</script>

</head>
<body class="page-body">
	<div class="settings-pane">
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		<div class="settings-pane-inner">
			<div class="row">
				<div class="col-md-4">
					<div class="user-info">
						<div class="user-image">
							<a href="extra-profile.html">
								{!! HTML::image('icon/user-2.png', 'user image', ['class' => 'img-responsive img-circle']) !!}
							</a>
						</div>
						<div class="user-details">
							<h3>
								<a href="extra-profile.html">{{ $user->name }}</a>

								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							<p class="user-title">Web Developer</p>
							<div class="user-links">
								<a href="{{ url('administrator/changepassword') }}" class="btn btn-primary">Change password</a>
								<!-- <a href="extra-profile.html" class="btn btn-success">Upgrade</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="sidebar-menu toggle-others">
			<div class="sidebar-menu-inner">
				<header class="logo-env">
					<!-- logo -->
					<div class="logo">
						<a href="" class="logo-expanded">
							ADMINISTRATOR
						</a>
						<a href="" class="logo-collapsed">
							ADMIN
						</a>
					</div>

					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>

						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>

					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
				</header>
				<ul id="main-menu" class="main-menu">
					{{-- <li>
						<a href="{{ asset('administrator/dashboard') }}">
							<i class="fa fa-dashboard"></i>
							<span class="title">Dashboard</span>
						</a>
					</li> --}}
					<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/booking') ? 'active' : '' }}">
						<a href="{{ asset('administrator/booking') }}">
							<i class="fa fa-star-o"></i>
							<span class="title">Booking</span>
						</a>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="fa fa-cogs"></i>
							<span class="title">Tour</span>
						</a>
						<ul>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/tour') ? 'active' : '' }}">
								<a href="{{ asset('administrator/tour') }}">
									<span class="title">All Tours</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/tour/create') ? 'active' : '' }}">
								<a href="{{ asset('administrator/tour/create') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/review') ? 'active' : '' }}">
								<a href="{{ asset('administrator/review') }}">
									<span class="title">Reviews</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/request') ? 'active' : '' }}">
								<a href="{{ asset('administrator/request') }}">
									<span class="title">Request</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="fa fa-thumb-tack"></i>
							<span class="title">Posts</span>
						</a>
						<ul>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/post') ? 'active' : '' }}">
								<a href="{{ asset('administrator/post') }}">
									<span class="title">All Posts</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/post/create') ? 'active' : '' }}">
								<a href="{{ asset('administrator/post/create') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/category') ? 'active' : '' }}">
								<a href="{{ asset('administrator/category') }}">
									<span class="title">Categories</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=post-tag') }}">
									<span class="title">Tags</span>
								</a>
							</li>
						</ul>
					</li>
					<li >
						<a href="{{ asset('administrator/destination') }}">
							<i class="fa fa-map-marker"></i>
							<span class="title">Vietnam Destination</span>
						</a>
						<ul>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/destination') ? 'active' : '' }}">
								<a href="{{ asset('administrator/destination') }}">
									<span class="title">All Destinations</span>
								</a>
							</li>
							<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/destination/create') ? 'active' : '' }}">
								<a href="{{ asset('administrator/destination/create') }}">
									<span class="title">New Destination</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="{{ (Route::getCurrentRoute()->getPath() == 'administrator/contact') ? 'active' : '' }}">
						<a href="{{ asset('administrator/contact') }}">
							<i class="fa fa-phone"></i>
							<span class="title">Contact</span>
						</a>
					</li>
					<!-- <li>
						<a href="ui-panels.html">
							<i class="fa fa-user"></i>
							<span class="title">User</span>
						</a>
						<ul>
							<li {{{ (Request::is('/administrator/tour') ? 'class=active' : '') }}}>
								<a href="{{ asset('administrator/edit') }}">
									<span class="title">All Users</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/post-new') }}">
									<span class="title">Add New</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=category') }}">
									<span class="title">Your Profile</span>
								</a>
							</li>
							<li>
								<a href="{{ asset('administrator/edit-tags?taxonomy=post-tag') }}">
									<span class="title">Subscribers</span>
								</a>
							</li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
		<div class="main-content">
			<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					<li class="hidden-sm hidden-xs" style="min-height: 77px;">
						<a data-toggle="sidebar" href="#">
							<i class="fa-bars"></i>
						</a>
					</li>
				</ul>
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

						<form name="userinfo_search_form" method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>

					</li>

					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{!! HTML::image('icon/user-4.png', 'user image', ['class' => 'img-circle img-inline userpic-32', 'width' => '28']) !!}
							<span>
								{{ $user->name }}
								<i class="fa-angle-down"></i>
							</span>
						</a>

						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="{{ url('administrator/changepassword') }}">
									<i class="fa-edit"></i>
									Change password
								</a>
							</li>
							<li class="last">
								<a href="{{ URL::to('/administrator/logout') }}">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>

				</ul>

			</nav>
			@yield('page-content')


		</div>
		</div>
	</div>

	{!! HTML::script('TweenMax.min.js') !!}
	{!! HTML::script('resizeable.js') !!}
	{!! HTML::script('joinable.js') !!}
	{!! HTML::script('admin-toggles.js') !!}

	@yield('script')

	{!! HTML::script('admin-custom.js') !!}
	<script>
		// Open left sidebar if child menu is active
		var element = $('.sidebar-menu .main-menu ul li.active');
		element.parents('li').addClass('opened expanded');
	</script>
</body>
</html>