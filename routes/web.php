<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;

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

Route::get('/', [RegistrasiController::class, 'index']);
Route::post('/daftar', [RegistrasiController::class, 'daftar']);
Route::get('/success', [RegistrasiController::class, 'success'])->name('success');
