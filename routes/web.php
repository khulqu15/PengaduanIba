<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PagesController::class,'home'])->name('root');
Route::get('login', [PagesController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('registrasi', [PagesController::class,'registrasi'])->name('register');
Route::post('registrasi', [AuthController::class,'register'])->name('register.post');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::middleware('user')->group(function() {
    Route::get('home', [PagesController::class, 'home_masyarakat'])->name('home');
    Route::get('tulis_pengaduan', [PagesController::class,'tulis_pengaduan'])->name('pengaduan.create');
    Route::post('simpan_pengaduan', [ComplaintController::class ,'store'])->name('store.complaint');
    Route::get('history', [PagesController::class,'history'])->name('history.complaint');
    Route::get('detail_pengaduan/{id}', [PagesController::class,'detail_pengaduan'])->name('show.complaint');
    Route::get('lihat_tanggapan/{id}', [PagesController::class,'lihat_tanggapan'])->name('show.complaint.respond');
});

// system
Route::get('system/index', [PagesController::class,'index']);

// system admin
Route::middleware('admin')->group(function() {
    Route::get('system/dashboard', [PagesController::class,'dashboard_admin'])->name('dashboard.admin');
    Route::get('system/verifikasi_pengaduan', [PagesController::class,'verifikasi_pengaduan_admin'])->name('ver.complaint');
    Route::get('system/detail_pengaduan/{id}', [PagesController::class,'detail_pengaduan_admin'])->name('show.complaint.admin');
    Route::get('system/tanggapan/{id}', [PagesController::class,'tanggapan_admin'])->name('create.response.complaint');
    Route::patch('system/simpan_tanggapan', [ResponseController::class,'store'])->name('store.response');


    Route::get('system/lihat_petugas', [PagesController::class,'lihat_petugas'])->name('index.petugas');
    Route::get('system/tambah_petugas', [PagesController::class,'tambah_petugas'])->name('create.petugas');;
    Route::post('system/store_petugas', [UserController::class,'store'])->name('store.petugas');;
    Route::get('system/edit_petugas/{id}', [PagesController::class,'edit_petugas'])->name('edit.petugas');;
    Route::patch('system/update_petugas/{id}', [UserController::class,'update'])->name('update.petugas');;
    Route::get('system/preview_petugas', [PagesController::class,'preview_petugas'])->name('show.petugas');;
    Route::get('system/cetak_petugas', [PagesController::class,'cetak_petugas'])->name('print.petugas');;
    Route::get('system/hapus_petugas/{id}', [UserController::class,'destroy'])->name('delete.petugas');;

    Route::get('system/lihat_masyarakat', [PagesController::class,'lihat_masyarakat']);
    Route::get('system/preview_masyarakat', [PagesController::class,'preview_masyarakat']);
    Route::get('system/cetak_masyarakat', [PagesController::class,'cetak_masyarakat']);

    Route::get('system/lihat_laporan', [PagesController::class,'lihat_laporan']);
    Route::get('system/preview_pengaduan', [PagesController::class,'preview_pengaduan']);
    Route::get('system/cetak_pengaduan', [PagesController::class,'cetak_pengaduan']);
    Route::get('system/delete_pengaduan/{id}', [ComplaintController::class,'destroy'])->name('delete.complaint');

    Route::get('system/lihat_tanggapan', [PagesController::class,'lihat_tanggapan_admin'])->name('lihat.response');
    Route::get('system/edit_tanggapan/{id}', [PagesController::class,'edit_tanggapan'])->name('edit.response');
    Route::get('system/preview_tanggapan', [PagesController::class,'preview_tanggapan']);
    Route::get('system/cetak_tanggapan', [PagesController::class,'cetak_tanggapan']);
    Route::patch('system/update_tanggapan/{id}', [ResponseController::class,'update'])->name('update.response');
    Route::get('system/delete_tanggapan/{id}', [ResponseController::class,'destroy'])->name('delete.response');
});
// system petugas
// Route::get('system/petugas/dashboard', [PagesController::class,'dashboard_petugas']);
// Route::get('system/petugas/halaman_petugas', [PagesController::class,'halaman_petugas']);
// Route::get('system/petugas/verifikasi_pengaduan', [PagesController::class,'verifikasi_pengaduan_petugas']);
// Route::get('system/petugas/detail_pengaduan', [PagesController::class,'detail_pengaduan_petugas']);
// Route::get('system/petugas/proses', [PagesController::class,'proses']);