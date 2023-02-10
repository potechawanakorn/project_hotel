<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
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
})->middleware('auth');
Route::get('/login', function () {
    return view('layouts.login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    // manajemen jurusan
    Route::get('/jurusan', [JurusanController::class, 'index']);
    Route::get('/jurusan/form', [JurusanController::class, 'create']);
    Route::post('/jurusan', [JurusanController::class, 'store']);
    Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
    Route::put('/jurusan/{id}', [JurusanController::class, 'update']);
    Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy']);

    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/form', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
});
