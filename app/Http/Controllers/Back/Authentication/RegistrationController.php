<?php

namespace App\Http\Controllers\Back\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class RegistrationController extends Controller
{

    /**
     * Show the Register Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view('authentication.register');
    }


    /**
     * Register the user
     * @param Request $request
     */
    public function postRegister(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());

        dd($user);
    }


}
