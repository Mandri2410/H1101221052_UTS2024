<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PresensiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layout.main');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/gaji', function () {
    return view('gaji');
});

Route::get('/form-gaji', [GajiController::class, 'showForm'])->name('form.gaji');
Route::post('/submit-gaji', [GajiController::class, 'submitForm'])->name('submit.gaji');

Route::get('/jabatan', function () {
    return view('jabatan');
});

Route::get('/form-jabatan', [JabatanController::class, 'showForm'])->name('form.jabatan');
Route::post('/submit-jabatan', [JabatanController::class, 'submitForm'])->name('submit.jabatan');

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/form-presensi', [PresensiController::class, 'showForm'])->name('form.presensi');
Route::post('/submit-presensi', [PresensiController::class, 'submitForm'])->name('submit.presensi');
