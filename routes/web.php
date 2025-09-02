<?php

use App\Http\Controllers\CeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HadiahController;
use App\Http\Controllers\IsiUndanganController;
use App\Http\Controllers\MempelaiLController;
use App\Http\Controllers\MempelaiPController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\WaktuDanTempatController;
use App\Models\Galeri;
use App\Models\Undangan;
use App\Models\WaktuDanTempat;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('cerita', CeritaController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('hadiah', HadiahController::class);
Route::resource('isiUndangan', IsiUndanganController::class);
Route::resource('mempelaiL', MempelaiLController::class);
Route::resource('mempelaiP', MempelaiPController::class);
Route::resource('undangan', UndanganController::class);
Route::resource('waktuDanTempat', WaktuDanTempatController::class);

Route::get('/undangan/{slug}', [UndanganController::class, 'show']);
