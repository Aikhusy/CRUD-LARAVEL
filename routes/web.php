<?php

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



Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');
Route::post('/ruangan', [RuanganController::class, 'store'])->name('ruangan.store');
Route::get('/ruangan/{ruangan}', [RuanganController::class, 'show'])->name('ruangan.show');
Route::get('/ruangan/edit/{ruangan}', [RuanganController::class, 'edit'])->name('ruangan.edit');
Route::patch('/ruangan/{ruangan}', [RuanganController::class, 'update'])->name('ruangan.update');

