<?php

namespace App\Http\Controllers\Auth;

use Session;
use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminAuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin() {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $username  = $request->input('username');
        $password   = $request->input('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('administrator/booking');
        } else {
            $request->session()->flash('message', 'Your username or password is not correct, please try again!');
            return redirect('/administrator/login');
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/administrator/login');
    }
}
