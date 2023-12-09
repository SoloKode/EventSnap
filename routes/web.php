<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesananController;

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
Route::get('admin/pesananselesai', [AdminController::class, 'pesananselesai'],)->name('admin.pesananselesai');
Route::get('admin/pesananproses', [AdminController::class, 'pesananproses'],)->name('admin.pesananproses');
Route::get('admin/pesananbaru', [AdminController::class, 'pesananbaru'],)->name('admin.pesananbaru');
Route::get('admin/pesanan', [AdminController::class, 'pesanan'],)->name('admin.pesanan');
Route::resource('pesanan', PesananController::class);
Route::resource('admin', AdminController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
