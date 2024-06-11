<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SoalAlgoritmaController;
use App\Http\Controllers\SoalDatabaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $title = 'Page Home';
    return view('layout.app', [
        'title' => $title
    ]);
});

//soal database
Route::get('/database', [SoalDatabaseController::class, 'database']);
Route::get('/ujian', [SoalDatabaseController::class, 'ujian']);
Route::post('/tampil', [SoalDatabaseController::class, 'tampil'])->name('tampil');

Route::get('peserta', [SoalDatabaseController::class, 'peserta']);

Route::get('user', [SoalDatabaseController::class, 'user']);
Route::get('create', [SiswaController::class, 'create']);
Route::post('store', [SiswaController::class, 'store'])->name('store');
Route::delete('destroy/{id}', [SiswaController::class, 'destroy'])->name('destroy');

//soal algoritma
Route::get('/algoritma', [SoalAlgoritmaController::class, 'index']);
Route::post('/hasilsatu', [SoalAlgoritmaController::class, 'hasilsatuu'])->name('satu');
Route::post('/hasildua', [SoalAlgoritmaController::class, 'hasildua'])->name('dua');
Route::get('/hasiltiga', [SoalAlgoritmaController::class, 'hasiltiga'])->name('tiga');
Route::post('/hasilempat', [SoalAlgoritmaController::class, 'hasilempat'])->name('empat');
