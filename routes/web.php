<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', [FormController::class, 'submitForm']);

// Route untuk menampilkan daftar analisis
Route::get('/analisis', [AnalisisController::class, 'index'])->name('analisis.index');

// Route untuk menambahkan data analisis baru
Route::post('/analisis', [AnalisisController::class, 'store'])->name('analisis.store');

// Route untuk menampilkan form edit data analisis
Route::get('/analisis/{id}/edit', [AnalisisController::class, 'edit'])->name('analisis.edit');

// Route untuk memperbarui data analisis
Route::put('/analisis/{id}', [AnalisisController::class, 'update'])->name('analisis.update');

// Route untuk menghapus data analisis
Route::delete('/analisis/{id}', [AnalisisController::class, 'destroy'])->name('analisis.destroy');

// Route untuk mencetak daftar analisis dalam bentuk PDF
Route::get('/analisis/print', [AnalisisController::class, 'print'])->name('analisis.print');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
