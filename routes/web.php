<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SprintGroomingController;

// Route untuk menampilkan semua data sprint grooming
Route::get('/sprint_groomings', [SprintGroomingController::class, 'index'])->name('sprint_groomings.index');

// Route untuk menampilkan form tambah data sprint grooming
Route::get('/sprint_groomings/create', [SprintGroomingController::class, 'create'])->name('sprint_groomings.create');

// Route untuk menyimpan data sprint grooming baru
Route::post('/sprint_groomings', [SprintGroomingController::class, 'store'])->name('sprint_groomings.store');

// Route untuk menampilkan detail sprint grooming
Route::get('/sprint_groomings/{sprintGrooming}', [SprintGroomingController::class, 'show'])->name('sprint_groomings.show');

// Route untuk menampilkan form edit sprint grooming
Route::get('/sprint_groomings/{sprintGrooming}/edit', [SprintGroomingController::class, 'edit'])->name('sprint_groomings.edit');

// Route untuk mengupdate data sprint grooming
Route::put('/sprint_groomings/{sprintGrooming}', [SprintGroomingController::class, 'update'])->name('sprint_groomings.update');

// Route untuk menghapus data sprint grooming
Route::delete('/sprint_groomings/{sprintGrooming}', [SprintGroomingController::class, 'destroy'])->name('sprint_groomings.destroy');
