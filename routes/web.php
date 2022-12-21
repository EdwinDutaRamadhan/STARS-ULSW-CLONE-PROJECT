<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/',[PengumumanController::class, 'index']);
Route::get('/home',[PengumumanController::class, 'home']);
Route::get('/home/category/{category}',[PengumumanController::class, 'category']);
Route::get('/home/{id}',[PengumumanController::class, 'show']);

Route::resource('/home/mahasiswa', MahasiswaController::class);
