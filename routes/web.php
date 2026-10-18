<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::view('/tentang', 'page.about')->name('tentang');
Route::get('/buku', [BookController::class, 'index'])->name('buku');
Route::get('/buku/{book}', [BookController::class, 'show'])->name('buku.show');
Route::view('/kontak', 'page.kontak')->name('kontak');
