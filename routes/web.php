<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/{npm}', [MahasiswaController::class, 'update']);
    Route::delete('/mahasiswa/{npm}', [MahasiswaController::class, 'destroy']);
