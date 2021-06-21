<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\MovieController;
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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/log-in', [PageController::class, 'logIn'])->name('log-in');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::get('/tiket-saya', [UserController::class, 'tiketSaya'])->name('tiketSaya');
Route::get('/forgot-password', [PageController::class, 'forgotPassword'])->name('forgot-password');
Route::resource('movies', MovieController::class);