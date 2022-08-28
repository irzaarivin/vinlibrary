<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BerandaController::class, 'index']);
Route::get('/home', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/read', [BacaController::class, 'index']);
Route::get('/baca', [BacaController::class, 'index']);

Route::get('/read/{book:slug}', [BacaController::class, 'show'])->middleware('auth');
Route::get('/baca/{book:slug}', [BacaController::class, 'show'])->middleware('auth');

Route::get('/read/{book:slug}/view', [BacaController::class, 'pedeef'])->middleware('auth');
Route::get('/baca/{book:slug}/lihat', [BacaController::class, 'pedeef'])->middleware('auth');

Route::get('/read/{slug}/search', [BacaController::class, 'cari'])->middleware('auth');
Route::get('/baca/{slug}/cari', [BacaController::class, 'cari'])->middleware('auth');

Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/about', [TentangController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/masuk', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');