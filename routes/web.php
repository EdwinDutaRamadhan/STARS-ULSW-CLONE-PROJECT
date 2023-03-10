<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardMahasiswa;
use App\Http\Controllers\DashboardPengumuman;
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

Route::get('/',[PengumumanController::class, 'index'])->name('home');
Route::get('/home',[PengumumanController::class, 'home']);
Route::get('/home/category/{category}',[PengumumanController::class, 'category']);
Route::get('/home/{id}',[PengumumanController::class, 'show']);

//AJAX POST
Route::post('/home/mahasiswa/beasiswa', [MahasiswaController::class, 'getBeasiswa']);
Route::post('/home/mahasiswa/profile', [MahasiswaController::class, 'getProfile']);

Route::resource('/home/mahasiswa', MahasiswaController::class);

Route::get('/admin/login', [LoginController::class, 'index'])->middleware('guest')->name('admin-login');
Route::get('/admin/logout', [LoginController::class, 'adminLogout'])->name('admin-logout');
Route::post('/admin/login', [LoginController::class, 'adminAuthenticate']);

//ADMIN
//===== PENGUMUMAN =====
Route::resource('/admin/dashboard/pengumuman', DashboardPengumuman::class )->middleware('auth');

//===== MAHASISWA =====
Route::resource('/admin/dashboard/mahasiswa', DashboardMahasiswa::class )->middleware('auth');
//AJAX
Route::post('/admin/dashboard/mahasiswa/detail', [DashboardMahasiswa::class, 'getProfile']);
