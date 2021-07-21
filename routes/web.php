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
/* guset */
Route::get('/', function () {
    return view('guest.welcome');
});

Route::resource('posts', PostController::class)->only('index', 'show');

Auth::routes(); 

/* admin */
Route::get('/admin', 'HomeController@index')->name('home');

 Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function (){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', PostController::class);
});  