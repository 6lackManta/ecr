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

Route::group(['middleware'=> ['web']], function() {
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@getLogout');
Auth::routes();
// Route::get('auth/login','Auth\LoginController@getLogin');
// Route::post('auth/login','Auth\LoginController@postLogin');
// Route::get('auth/logout','Auth\LoginController@getLogout');

// ///Registration Routes
// Route::get('auth/register','Auth\RegisterController@getRegister');
// Route::post('auth/register','Auth\RegisterController@postRegister');


Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']); 
Route::get('blog/{slug}',['uses'=>'BlogController@getSingle' ,'as' => 'blog.single'])->where('slug','[\w\d\-|_]+');


Route::get('about','PagesController@getAbout');
Route::resource('posts', 'PostController');
Route::get('contact','PagesController@getContact');
Route::get('/', 'PagesController@getIndex');
});

Route::get('/home', 'HomeController@index')->name('main');
