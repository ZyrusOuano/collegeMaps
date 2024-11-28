<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mapController;

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
    return view('home');
});

Route::resource('maps', mapController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\mapController::class, 'index'])->name('home');
