<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/tabelartikel', function () {
    return view('tabelartikel');
});
Route::get('/tabelkonsultasi', function () {
    return view('tabelkonsultasi');
});