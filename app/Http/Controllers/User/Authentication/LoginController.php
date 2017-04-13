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
        return Sentinel::check();
    }
}
