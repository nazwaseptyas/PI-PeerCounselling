<?php

use App\Models\Konsultasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KonsultasiController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/konsultasi', function () {
    return view('konsultasi');
});
// Route::get('/artikel', function () {
//     return view('artikel');
// });
// Route::get('/detail', function () {
//     return view('detail');
// });

Route::get('/artikel', [ArtikelController::class, 'indexxx']);


Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/tabelartikel', function () {
    return view('tabelartikel');
});

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/tabelkonsultasi', function () {
//     return view('tabelkonsultasi');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi'])->name('konsultasi');
//     Route::post('/createdata', [KonsultasiController::class, 'createdata'])->name('createdata');
//     // Dan rute lain yang membutuhkan pengguna yang sudah login
// });

// Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi'])->name('konsultasi')->middleware('auth');
// Route::post('/createdata', [KonsultasiController::class, 'createdata'])->name('createdata')->middleware('auth');
// Routes for ArtikelController (Articles)
Route::get('/tabelartikel', [ArtikelController::class, 'indexxxx'])->name('tabelartikel');
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->name('tambahartikel');
Route::post('/simpanartikel', [ArtikelController::class, 'simpanArtikel'])->name('simpanartikel');
Route::get('/tampilkandata/{id}', [ArtikelController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/delete-article/{id}', [ArtikelController::class, 'delete'])->name('delete-article');
Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('detail');
Route::get('/search', [ArtikelController::class, 'search'])->name('search');

// Routes for KonsultasiController (Consultations)
Route::get('/tabelkonsultasi', [KonsultasiController::class, 'indexx'])->name('tabelkonsultasi');
Route::get('/tampilkandata/{id}', [KonsultasiController::class, 'tampilkandata'])->name('tampilkandata');
// Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi'])->name('konsultasi');
// Route::post('/createdata', [KonsultasiController::class, 'createdata'])->name('createdata');
Route::get('/delete-consultation/{id}', [KonsultasiController::class, 'delete'])->name('delete-consultation');
// Route::get('/konfirm', [KonsultasiController::class, 'index'])->name('konfirm');

Route::group(['middleware' => ['auth']], function () {
    // Rute untuk menampilkan form konsultasi
    Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi'])->name('konsultasi');
    // Rute untuk menyimpan data konsultasi dari form
    Route::post('/createdata', [KonsultasiController::class, 'createdata'])->name('createdata');
});
Route::get('/konfirm', [KonsultasiController::class, 'indexz'])->name('konfirm')->middleware('auth');
Route::post('/confrimdata', [KonsultasiController::class, 'confrimdata'])->name('confrimdata')->middleware('auth');
Route::get('/searchcon', [KonsultasiController::class, 'searchcon'])->name('searchcon');