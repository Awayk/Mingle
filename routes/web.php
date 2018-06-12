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
Route::get('/', 'WelcomeController@welcome')->name('home');


Route::get('/organizations2/{organization}', 'OrganizationsController@show2');

//CRUD routes for everything regarding the Organization
Route::resource('organizations', 'OrganizationsController');

Route::resource('organizations/{organization}/services', 'ServicesController');

Route::resource('posts', 'PostsController');

Route::resource('sponsors', 'SponsorsController');



// auth Routes
Auth::routes();



Route::get('/minglenet', function () {
    return view('mingleNet');
});
