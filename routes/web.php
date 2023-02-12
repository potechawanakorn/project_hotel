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
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::middleware('auth')->group(function () {
        // manajemen booking
        Route::get('/booking', [BookingController::class, 'index']);
        Route::get('/booking/form', [BookingController::class, 'create']);
        Route::post('/booking', [BookingController::class, 'store']);
        Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
        Route::put('/booking/{id}', [BookingController::class, 'update']);
        Route::delete('/booking/{id}', [BookingController::class, 'destroy']);
    
        Route::get('/tamu', [TamuController::class, 'index']);
        Route::get('/tamu/form', [TamuController::class, 'create']);
        Route::post('/tamu', [TamuController::class, 'store']);
        Route::get('/tamu/edit/{id}', [TamuController::class, 'edit']);
        Route::put('/tamu/{id}', [TamuController::class, 'update']);
        Route::delete('/tamu/{id}', [TamuController::class, 'destroy']);
});
});