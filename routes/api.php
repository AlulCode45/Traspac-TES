<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'handle']);
    Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'handle'])->middleware('auth:sanctum');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/karyawan', KaryawanController::class);
    Route::apiResource('/unit-kerja', \App\Http\Controllers\UnitKerjaController::class);
    Route::apiResource('/jabatan', \App\Http\Controllers\JabatanController::class);
});
