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
Route::get('/quotes','\App\Http\Controllers\sendQuotesController@quotepage');
Route::get('/weather','\App\Http\Controllers\sendQuotesController@weatherpage');
Route::post('/sendquotes','\App\Http\Controllers\sendQuotesController@sendquote');
Route::post('/sendweather','\App\Http\Controllers\sendQuotesController@sendweather');
