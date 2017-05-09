<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//https://www.youtube.com/playlist?list=PLwAKR305CRO-Q90J---jXVzbOd4CDRbVx

// Authentication route starts
Route::group(['prefix'  =>  '/authentication'], function(){
    Route::group(['namespace' => 'Back\Authentication'], function () {

        Route::get('/register', 'RegistrationController@register');
        Route::post('/register', 'RegistrationController@postRegister')->name('register');

        Route::get('/login', 'LoginController@login')->name('login');

    });
});
// Authentication route Ends