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


// Route::get('auth/login','Auth\LoginController@getLogin');
// Route::post('auth/login','Auth\LoginController@postLogin');
// Route::get('auth/logout','Auth\LoginController@getLogout');

// ///Registration Routes
// Route::get('auth/register','Auth\RegisterController@getRegister');
// Route::post('auth/register','Auth\RegisterController@postRegister');



Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@getAbout');
Route::get('/services', 'HomeController@getServices');

Route::get('/contact', 'HomeController@getContact');
Route::get('/allcars', 'HomeController@getCars');
Route::resource('cars', 'CarController');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@getLogout');

Route::post('/contact', 'HomeController@postContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
