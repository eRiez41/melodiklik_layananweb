<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

Route::middleware('auth')->group(function () {
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
});

Route::get('/', function () {
    return redirect()->route('barang.index');
});


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
