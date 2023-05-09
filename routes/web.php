<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UsersController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [UsersController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/teller', [UsersController::class, 'teller'])->middleware('userAkses:teller');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/get-nomor-antrian', [AntrianController::class, 'getNomorAntrian']);
