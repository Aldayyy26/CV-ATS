<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiPribadiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CVController;


// Route untuk menampilkan form informasi pribadi
Route::get('/', [InformasiPribadiController::class, 'index'])->name('informasi-pribadi.index');
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan.index');
Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');

// Route untuk menyimpan data informasi pribadi
Route::post('/informasi-pribadi', [InformasiPribadiController::class, 'store'])->name('informasi-pribadi.store');
Route::post('/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');
Route::post('/pekerjaan', [PekerjaanController::class, 'store'])->name('pekerjaan.store');
Route::post('/skill', [SkillController::class, 'store'])->name('skill.store');

Route::post('/unduh-cv', [CVController::class, 'unduhCV'])->name('unduh.cv');
Route::match(['get', 'post'], '/unduh-cv', [CVController::class, 'unduhCV'])->name('unduh.cv');



