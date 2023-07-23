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

// Routes Home
Route::get('/', function () {
    return view('home');
});
// Routes About
Route::get('/about', function () {
    return view('about');
});
// Routes Konsultasi
Route::get('/konsultasi', function () {
    return view('konsultasi');
});
// Routes Kontak
Route::get('/kontak', function () {
    return view('kontak');
});
// Routes Admin
Route::get('/admin', function () {
    return view('admin');
});

//Routes Login, Register, dan Logout
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Routes Artikel
Route::get('/artikel', [ArtikelController::class, 'indexxx']);
Route::get('/tabelartikel', [ArtikelController::class, 'indexxxx'])->name('tabelartikel');
Route::get('/tambahartikel', [ArtikelController::class, 'tambahArtikel'])->name('tambahartikel');
Route::post('/simpanartikel', [ArtikelController::class, 'simpanArtikel'])->name('simpanartikel');
Route::get('/delete-article/{id}', [ArtikelController::class, 'delete'])->name('delete-article');
Route::get('/detail/{id}', [ArtikelController::class, 'detail'])->name('detail');
Route::get('/search', [ArtikelController::class, 'search'])->name('search');
Route::get('/tampilkanartikel/{id}', [ArtikelController::class, 'tampilkanartikel'])->name('tampilkanartikel');
Route::post('/updateartikel/{id}', [ArtikelController::class, 'updateartikel'])->name('updateartikel');

// Routes Konsultasi
Route::get('/tabelkonsultasi', [KonsultasiController::class, 'indexx'])->name('tabelkonsultasi');
Route::get('/delete-consultation/{id}', [KonsultasiController::class, 'delete'])->name('delete-consultation');
Route::group(['middleware' => ['auth']], function () {
    // Rute untuk menampilkan form konsultasi
    Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi'])->name('konsultasi');
    // Rute untuk menyimpan data konsultasi dari form
    Route::post('/createdata', [KonsultasiController::class, 'createdata'])->name('createdata');
});
Route::get('/konfirm', [KonsultasiController::class, 'indexz'])->name('konfirm')->middleware('auth');
Route::post('/confrimdata', [KonsultasiController::class, 'confrimdata'])->name('confrimdata')->middleware('auth');
Route::get('/searchcon', [KonsultasiController::class, 'searchcon'])->name('searchcon');
Route::get('/tampilkandata/{id}', [KonsultasiController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[KonsultasiController::class, 'updatedata'])->name('updatedata');