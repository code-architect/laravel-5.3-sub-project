<?php

namespace App\Http\Controllers\User\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }
}
