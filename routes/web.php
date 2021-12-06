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

Route::get('/home', function () {
    return view('home');
});



Route::get('/profiles/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('profiles/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('profiles/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('p/{post}', 'PostsController@show')->name('posts.show');
