<?php

namespace App\Http\Controllers\User\Authentication;

use Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{


    // show the Login form to the user
    public function login()
    {
        return view('authentication.login');
    }


    // logging in the registered user
    public function postLogin(Request $request)
    {
        Sentinel::authenticate($request->all());
        //Sentinel::check();
        redirect('/home');
    }


    //logging out the user
    public function logout()
    {
        Sentinel::logout();
        return redirect('/authentication');
    }

    public function home()
    {
        return view('user.dashboard');
    }
}
