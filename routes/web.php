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

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::resource('discussions', 'App\Http\Controllers\DiscussionsController');
Route::resource('discussions/{discussion}/replies', 'App\Http\Controllers\RepliesController');
Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', 'App\Http\Controllers\DiscussionsController@reply')->name('discussions.best-reply');
