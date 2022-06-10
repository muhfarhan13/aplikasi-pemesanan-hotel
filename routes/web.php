<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasUmumController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;

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
// Route::get('/home ', [HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fasilitas', [FasilitasUmumController::class, 'index'])->name('fasilitas');
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');

Route::group(['middleware' => ['auth', 'role:tamu,resepsionis']], function () {
    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');
});

Route::group(['middleware' => ['auth', 'role:tamu,admin']], function () {
    Route::get('/fasilitas-umum', [FasilitasUmumController::class, 'index'])->name('fasilitas-umum');
});

Route::group(['middleware' => ['auth', 'role:tamu']], function () {
    Route::get('/cetak-bukti-reservasi/{id}', [ReservasiController::class, 'cetak_reservasi']);
    Route::POST('/pesan-kamar', [PesanController::class, 'pesan_kamar'])->name('pesan-kamar');
    Route::get('/account', [UserController::class, 'edit'])->name('account');
    Route::PUT('/update-account', [UserController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/tambah-kamar', [KamarController::class, 'create'])->name('tambah-kamar');
    Route::POST('/simpan-kamar', [KamarController::class, 'store'])->name('simpan-kamar');
    Route::get('/edit-kamar/{id}', [KamarController::class, 'edit']);
    Route::PUT('/update-kamar/{id}', [KamarController::class, 'update']);
    Route::DELETE('/hapus-kamar/{id}', [KamarController::class, 'destroy']);

    Route::get('/fasilitas-kamar', [FasilitasKamarController::class, 'index'])->name('fasilitas-kamar');
    Route::get('/tambah-fasilitas-kamar', [FasilitasKamarController::class, 'create'])->name('tambah-fasilitas-kamar');
    Route::POST('/simpan-fasilitas-kamar', [FasilitasKamarController::class, 'store'])->name('simpan-fasilitas-kamar');
    Route::get('/edit-fasilitas-kamar/{id}', [FasilitasKamarController::class, 'edit']);
    Route::PUT('/update-fasilitas-kamar/{id}', [FasilitasKamarController::class, 'update']);
    Route::DELETE('/hapus-fasilitas-kamar/{id}', [FasilitasKamarController::class, 'destroy']);

    Route::get('/tambah-fasilitas-umum', [FasilitasUmumController::class, 'create'])->name('tambah-fasilitas-umum');
    Route::POST('/simpan-fasilitas-umum', [FasilitasUmumController::class, 'store'])->name('simpan-fasilitas-umum');
    Route::get('/edit-fasilitas-umum/{id}', [FasilitasUmumController::class, 'edit']);
    Route::PUT('/update-fasilitas-umum/{id}', [FasilitasUmumController::class, 'update']);
    Route::DELETE('hapus-fasilitas-umum/{id}', [FasilitasUmumController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'role:resepsionis']], function () {
    Route::get('/cari', [ReservasiController::class, 'cari']);
    Route::get('/filter-checkin', [ReservasiController::class, 'filter_checkin'])->name('filter-checkin');
    Route::get('/export-reservasi', [ReservasiController::class, 'export_excel_reservasi']);
    Route::get('/status-reservasi/{id}', [ReservasiController::class, 'status_reservasi']);
});
