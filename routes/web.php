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

//Route to the welcome page
Route::get('/', function () {
    return view('welcome');
});

//CRUD routes for everything regarding the Organization
Route::resource('organizations', 'OrganizationsController');


// auth Routes
Auth::routes();

// dummy route user gets redirected too after login
Route::get('/home', 'HomeController@index')->name('home');
