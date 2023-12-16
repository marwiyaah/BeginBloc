<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/faq', 'App\Http\Controllers\PagesController@faq');

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


// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('posts/create', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

// routes/web.php
// web.php
// Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/posts/create','App\Http\Controllers\PostController@create')->name('posts.create');
Route::get('/posts/show', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
// Route::get('posts/{post}/edit', 'App\Http\Controllers\PostsController@edit')->name('posts.edit');
Route::get('posts/{post}/update', 'App\Http\Controllers\PostsController@update')->name('posts.edit');
Route::get('posts/{post}/contribute', 'App\Http\Controllers\PostsController@contribute')->name('posts.contribute');

// routes/web.php
// Route::resource('posts', 'App\Http\Controllers\PostController');

// create post will not work if the below option is working
Route::resource('posts','App\Http\Controllers\PostsController');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/api/client', function () {
    return view('api.client');
});

Route::get('/search', 'App\Http\Controllers\PostsController@search');
Route::get('/pagination/paginate-data', [App\Http\Controllers\PostsController::class, 'paginateData'])->name('pagination.paginate-data');
Route::post('/contribute/{id}/{percentage}', 'App\Http\Controllers\PostsController@contribute')->name('contribute');
Route::post('/submit-contribution', 'App\Http\Controllers\PostsController@submitContribution');
Route::get('/contributions/{postId}', 'App\Http\Controllers\PostsController@contributions');


