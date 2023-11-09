<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/hello', function () {
    //return view('welcome'); 
    return '<h1>Hello World</h1>';
});

Route::get('/users/{name}/{id}', function ($name,$id) {
    return 'This is user '.$name. ' with an id of '.$id;
});
*/

// homepage
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');

// dashboard for the profile homepage after login
Route::get('/dashboard', 'App\Http\Controllers\PagesController@dashboard');

// login page
Route::get('/login', 'App\Http\Controllers\PagesController@login');

// register page
Route::get('/register', 'App\Http\Controllers\PagesController@register');

// review page
Route::get('/review', 'App\Http\Controllers\PagesController@review');

// responses page
Route::get('/responses', 'App\Http\Controllers\PagesController@responses');

// history page
Route::get('/history', 'App\Http\Controllers\PagesController@history');

// delete account page
Route::get('/deleteAcc', 'App\Http\Controllers\PagesController@deleteAcc');

Route::resource('posts', 'App\Http\Controllers\PostController');