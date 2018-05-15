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

Route::get('/organizations', 'OrganizationsController@index');
Route::get('/organizations/create', 'OrganizationsController@create');
Route::get('/organizations/{organization}', 'OrganizationsController@show');
Route::post('/organizations', 'OrganizationsController@store');


// //hardcoded for testing
// Route::get('/organizations/silbernetz', function () {
//     return view('organizations.silbernetz');
// });



// auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
