<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BakeryController;

// User
Route::get('/', [BakeryController::class, 'Beranda'])->name('Beranda');
Route::get('/masukan', [BakeryController::class, 'masukan'])->name('masukan');
Route::post('/insertmasukan', [BakeryController::class, 'insertmasukan'])->name('insertmasukan ');
Route::post('/kirimPesanan', [BakeryController::class, 'kirimPesanan'])->name('kirimPesanan ');
Route::get('/menu', [BakeryController::class, 'menu_user'])->name('menu');
Route::get('/tentang', [BakeryController::class, 'tentang_user']);
Route::get('/sekarang', [BakeryController::class, 'pesan'])->name('sekarang');
Route::get('/insert', [BakeryController::class, 'insert'])->name('insert');
// Route::get('/menu', [BakeryController::class, 'menu_makanan']);
// Route::get('/menu', [BakeryController::class, 'menu_minuman']);
// Route::get('/menu', [BakeryController::class, 'menu_kue']);


// Admin
// Route::get('/promosi', [BakeryController::class, 'carousel'])->name('promosi');
// Route::get('/masukan_admin', [BakeryController::class, 'masukan_admin']);
// Route::get('/admin', [BakeryController::class, 'ind_admin']);
// Route::get('/profile', [BakeryController::class, 'profile'])->name('profile');
// Route::post('/edit_profile/{id}', [BakeryController::class, 'edit_profile']);
// Route::get('/menu_admin', [BakeryController::class, 'menu_admin'])->name('produk');
// Route::get('/prestasi', [BakeryController::class, 'prestasi']);
// Route::get('/sertifikat', [BakeryController::class, 'sertifikat']);
// Route::get('/add_prom', [BakeryController::class, 'tambah_prom']);
// Route::post('/tambah_promosi', [BakeryController::class, 'add_prom']);
// Route::get('/add_prod', [BakeryController::class, 'tambah_produk']);
// Route::post('/tambah_produk', [BakeryController::class, 'add_prod']);

// [TODO]: buat satu buah request post baru untuk 
// Rute untuk halaman login
// Rute untuk login dan logout admin


// Rute untuk halaman admin
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login_aksi');
// Route::get('/promosi', [AdminController::class, 'carousel'])->name('promosi');
// Route::get('/masukan_admin', [AdminController::class, 'masukan_admin']);
// Route::get('/admin', [AdminController::class, 'ind_admin'])->name('admin');
// Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
// Route::post('/edit_profile/{id}', [AdminController::class, 'edit_profile']);
// Route::get('/menu_admin', [AdminController::class, 'menu_admin'])->name('produk');
// Route::get('/prestasi', [AdminController::class, 'prestasi']);
// Route::get('/sertifikat', [AdminController::class, 'sertifikat']);
// Route::get('/add_prom', [AdminController::class, 'tambah_prom']);
// Route::post('/tambah_promosi', [AdminController::class, 'add_prom']);
// Route::get('/add_prod', [AdminController::class, 'tambah_produk']);
// Route::post('/tambah_produk', [AdminController::class, 'add_prod']);

// Route::middleware(['auth'])->group(function () {
    // Route::get('/loginn', [AuthController::class, 'showLoginForm'])->name('login');
    // Route::post('/login', [AuthController::class, 'login'])->name('login_aksi');
    Route::get('/promosi', [AdminController::class, 'carousel'])->name('promosi');
    Route::get('/masukan_admin', [AdminController::class, 'masukan_admin']);
    Route::get('/admin', [AdminController::class, 'ind_admin'])->name('admin');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/edit_profile/{id}', [AdminController::class, 'edit_profile']);
    Route::get('/menu_admin', [AdminController::class, 'menu_admin'])->name('produk');
    Route::get('/prestasi', [AdminController::class, 'prestasi'])->name('prestasi');
    Route::get('/add_pres', [AdminController::class, 'tambah_pres']);
    Route::post('/tambah_prestasi', [AdminController::class, 'add_pres']);
    Route::get('/sertifikat', [AdminController::class, 'sertifikat'])->name('sertifikat');
    Route::get('/add_serti', [AdminController::class, 'tambah_serti']);
    Route::post('/tambah_sertifikat', [AdminController::class, 'add_serti']);
    Route::get('/add_prom', [AdminController::class, 'tambah_prom']);
    Route::post('/tambah_promosi', [AdminController::class, 'add_prom']);
    Route::get('/edit_prom', [AdminController::class, 'edit_promosi'])->name('edit_prom');
    Route::post('/edit_prom/{id}', [AdminController::class, 'edit_prom']);
    Route::get('/add_prod', [AdminController::class, 'tambah_produk']);
    Route::post('/tambah_produk', [AdminController::class, 'add_prod']);
    Route::delete('/promosi/{id}', [AdminController::class, 'hapusPromosi'])->name('promosi.hapus');
    Route::get('/editsekarang/{id}', [AdminController::class, 'editsekarang']);
    Route::post('/updatepromosi/{id}', [AdminController::class, 'updatepromosi']);
// });