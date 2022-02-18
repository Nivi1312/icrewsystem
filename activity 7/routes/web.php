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
//retrive data
Route::get( '/user-record', 'App\Http\Controllers\StudViewController@User');
Route::get('/assignment-record', 'App\Http\Controllers\StudViewController@assignment');
Route::get('/marks-record', 'App\Http\Controllers\StudViewController@mark');
