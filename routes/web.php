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

// Page route.
Route::get('/', 'App\Http\Controllers\ChatsController@index');
Route::get('/disclaimer', function() {
    return view('disclaimer');
});

// Login route.
Route::post('login', 'App\Http\Controllers\ChatsController@login');

// Message routes.
Route::get('messages', 'App\Http\Controllers\ChatsController@fetchMessages');
Route::post('messages', 'App\Http\Controllers\ChatsController@sendMessage');

// Export routes.
Route::get('users/export/','App\Http\Controllers\ChatsController@exportUsers');
Route::get('chat/export/','App\Http\Controllers\ChatsController@exportMessages');
