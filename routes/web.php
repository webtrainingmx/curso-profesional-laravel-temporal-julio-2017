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

//Route::get('/museums', 'MuseumsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');

//Route::get('/museums', 'MuseumsController@index');
//Route::get('/museums/create', 'MuseumsController@create');
//Route::post('/museums', 'MuseumsController@store')->name("museums.store");
Route::resource('museums', 'MuseumsController');
//Route::post('reviews/save-review','ReviewsController@saveReview')->name("reviews.saveReview")
Route::resource('reviews', 'ReviewsController');

//Route::resource('museums', 'MuseumsController');
