<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
   Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'handle']);
   Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('karyawan')->name('karyawan.')->group(function () {
    Route::apiResource('/', KaryawanController::class)->middleware('auth:sanctum');
});
