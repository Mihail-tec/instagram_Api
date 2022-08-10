<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/', 'App\Http\Controllers\MainController@home');

// Route::get('/username', 'App\Http\Controllers\MainController@posts')->name('username');

// Route::get('/username/user_post/{id}', 'App\Http\Controllers\MainController@post');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes(['register' => false]);
Auth::routes();
 
Route::group(['middleware' => ['auth', 'instagram']], function(){
 
    Route::get('/', 'App\Http\Controllers\AppController@index');
 
    Route::get('/search', 'App\Http\Controllers\AppController@search');
 
    Route::get('/instagram', 'App\Http\Controllers\InstagramController@redirectToInstagramProvider');
 
    Route::get('/instagram/callback', 'App\Http\Controllers\InstagramController@handleProviderInstagramCallback');
});