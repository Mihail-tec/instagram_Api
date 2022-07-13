<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/username', 'App\Http\Controllers\MainController@posts')->name('username');

Route::get('/username/user_post/{id}', 'App\Http\Controllers\MainController@post');

