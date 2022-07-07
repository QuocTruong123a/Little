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
    return view('Little.Home');
});
Route::get('/Event', function () {
    return view('Little.Event');
});
Route::get('/Contact', function () {
    return view('Little.Contact');
});
Route::get('/test', function () {
    return view('welcome');
});
