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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('events', 'EventController');//Events route
Route::resource('photos', 'PhotoController');
Route::resource('videos', 'VideoController');

Route::get('/users', function () {//Just for testing
    return (App\User::all());
});