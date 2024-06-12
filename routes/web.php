<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/seller', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

// Route::get('/dashboard/admin', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard')->middleware('auth');

Route::get('admin/users', function () {
    return view('admin.users');
});

Route::get('admin/sellers', function () {
    return view('admin.sellers');
});

Route::get('admin/products', function () {
    return view('admin.products');
});

Route::get('admin/transactions', function () {
    return view('admin.transactions');
});

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
