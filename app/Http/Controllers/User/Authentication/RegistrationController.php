<?php

namespace App\Http\Controllers\User\Authentication;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
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

        return redirect('/');
    }
}
