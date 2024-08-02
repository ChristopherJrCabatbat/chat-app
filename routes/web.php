<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get( uri: '/', action: 'App\Http\Controllers\PusherController@index');
Route::post( uri: '/broadcast', action: 'App\Http\Controllers\PusherController@broadcast');
Route::post( uri: '/receive', action: 'App\Http\Controllers\PusherController@receive');
