<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaController;

use App\Http\Controllers\RuanganController;
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
    return view('index');
})->name('index');

Route::get('/table', function () {
    return view('table');
})->name('table');

Route::post('/createName', [NamaController::class, 'store'])->name('/createName');

Route::get('/table',[NamaController::class, 'index'])->name('showTable');

Route::post('/delete/{id}',[NamaController::class, 'destroy'])->name('deleteItem');



Route::resource('ruangan', RuanganController::class);
route::resource('barang',BarangController::class);
route::resource('ruangan',GenreController::class);
