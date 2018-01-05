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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});
Route::resource('posts', 'PostController');
Route::post('comments/{id}', 'CommentController@store');
Auth::routes();

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/projects/connectfour', function() {
    return \File::get(public_path() . '/demos/connectfour/index.html');
});

Route::get('/projects/uno', function() {
    return \File::get(public_path() . '/demos/uno/index.html');
});


Route::get('/contact', function() {
    return view('contact');
});

Route::post('/contact/send', 'ContactController@sendMail');

Route::get('/home', 'HomeController@index')->name('home');
