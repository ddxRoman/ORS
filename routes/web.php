<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('admin', function () {
    return view('index_admin');
})->name('admin');
Route::get('finance', function () {
    return view('finance.finance');
})->name('finance');
Route::get('login', function () {
    return view('autorization.autorizationPage');
})->name('autorization');
Route::get('autorization/submit', 'App\Http\Controllers\AutorizationController@submit' )->name('autorization-form');
