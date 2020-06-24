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

Route::resource('customer', 'CustomerController');

Route::get('user/{user}', 'CustomerController@user');

/**
 * one to Many Relationship using Posts and comments Example
*/
Route::resource('posts', 'PostController');

Route::resource('comments', 'CommentController');

Route::get('routes', function(){

    \Artisan::call('route:list');
    dd(\Artisan::output());

});


