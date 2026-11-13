<?php

// use App\Http\Controllers\BookController;
use App\Http\Controllers\KaryawanController;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

// Kalau buka halaman utama, langsung arahkan ke /books
// Route::redirect('/', '/books');
// Route::redirect('/', '/karyawan.index');

// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');

// rute untuk karyawan
Route::redirect('/', '/karyawan', 301);
// untuk menampilkan data karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
// Menampilkan Form tambah
Route::get('/karyawan/tambah', [KaryawanController::class, 'create'])->name('karyawan.create');
// Simpan Data Karyawan
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
// Untuk menampilkan form edit
Route::get('/karyawan/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
// Untuk update data form edit
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.edit');
// Untuk Menghapus
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
