<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::resource('discussions', 'App\Http\Controllers\DiscussionsController');
Route::resource('discussions/{discussion}/replies', 'App\Http\Controllers\RepliesController');
Route::get('users/notifications', [UsersController::class, 'notifications'])->name('users.notifications');
Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', 'App\Http\Controllers\DiscussionsController@reply')->name('discussions.best-reply');
