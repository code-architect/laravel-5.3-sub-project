<?php

namespace App\Http\Controllers\User\Authentication;

use Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    // show the registration form to the user
    public function register()
    {
        return view('authentication.register');
    }


    // process the given data from the registration form
    public function postRegister(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());

        $role = Sentinel::findRoleBySlug('user'); // find the role
        $role->users()->attach($user);              // assign the role to registered user

        return redirect('/');
    }
}
