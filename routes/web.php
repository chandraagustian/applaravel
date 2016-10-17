<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('root');
Route::get('/profile', 'StaticController@profile')->name('profile');
Route::get('/contact','StaticController@contact');
Route::get('/index','StaticController@index');
Route::get('/child','StaticController@child');
Route::get('/app','StaticController@app');
Route::get('/Mhs','StaticController@Mhs');
 Route::resource('articles', 'ArticlesController');
// Route::get('/', function () {
//   Article::create(['title' => 'Laravel 5', 'content' => 'lorem ipsum lorem ipsum', 'author' => 'm dwikuntobayu']);
//});
// Route::get('signup', 'UsersController@signup')->name('signup');
 //Route::post('signup', 'UsersController@signup_store')->name('signup.store');
