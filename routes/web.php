<?php

use App\Http\Controllers\ControllerEvent;
use App\Http\Controllers\ControllerHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerContact;

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


Route::prefix('/')->group(function(){
Route::controller(ControllerHome::class)->group(function(){
    Route::get('/Home','index')->name('home');
    Route::post('/Book_tickes','book')->name('book');
    Route::get('/Payment','show')->name('payment');
    Route::post('/post_Payment','post_show')->name('post.payment');
    Route::get('/notification_payment','notification')->name('notification');
    Route::get('/pdf','pdf')->name('pdf');
});
Route::controller(ControllerEvent::class)->group(function(){
    Route::get('/Event','index')->name('event');
    Route::get('Detailevent/{slug}/{id}','show')->name('detailevent');
});
Route::controller(ControllerContact::class)->group(function(){
    Route::get('/Contact','index')->name('contact');
    Route::post('/send','send')->name('send.contact');
});
});

