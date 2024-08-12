<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiPribadiController;

// Route untuk menampilkan form informasi pribadi
Route::get('/', [InformasiPribadiController::class, 'index'])->name('informasi-pribadi.index');

// Route untuk menyimpan data informasi pribadi
Route::post('/informasi-pribadi', [InformasiPribadiController::class, 'store'])->name('informasi-pribadi.store');


Route::get('/pendidikan', function () {
    return view('datadiri.pendidikan');
});
Route::get('/kerja', function () {
    return view('datadiri.pekerjaan');
});
Route::get('/skill', function () {
    return view('datadiri.skill');
});
Route::get('/sertif', function () {
    return view('sertif');
});
Route::get('/unduh', function () {
    return view('cv');
});
