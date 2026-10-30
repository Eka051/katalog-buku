<?php

// use App\Http\Controllers\BookController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

// Kalau buka halaman utama, langsung arahkan ke /books
// Route::redirect('/', '/books');
// Route::redirect('/', '/karyawan.index');

// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');

// rute untuk karyawan
Route::redirect('/', '/karyawan', 301);
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');

