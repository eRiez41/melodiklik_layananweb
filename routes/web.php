<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarangController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/seller', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// Rute untuk halaman kategori
Route::get('/kategori/{kategori}', function ($kategori) {
    // Logic untuk halaman kategori, bisa juga menggunakan controller
    return view('kategori', ['kategori' => $kategori]);
})->name('kategori');

// Rute untuk halaman produk
Route::get('/produk/{id}', function ($id) {
    // Logic untuk halaman produk, bisa juga menggunakan controller
    return view('produk', ['id' => $id]);
})->name('produk');


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

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');



Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');

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


Route::get('/wishlist', function () {
    $wishlistItems = [
        ['id' => 1, 'name' => 'Gitar Elektrik', 'price' => 1500000, 'image' => 'path/to/image1.jpg'],
        ['id' => 2, 'name' => 'Gitar Akustik', 'price' => 1200000, 'image' => 'path/to/image2.jpg'],
        // Tambahkan item wishlist lainnya
    ];
    return view('wishlist', compact('wishlistItems'));
})->name('wishlist');

Route::get('/cart', function () {
    $cartItems = [
        ['id' => 1, 'name' => 'Gitar Elektrik', 'price' => 1500000, 'quantity' => 1, 'image' => 'path/to/image1.jpg'],
        ['id' => 2, 'name' => 'Gitar Akustik', 'price' => 1200000, 'quantity' => 2, 'image' => 'path/to/image2.jpg'],
        // Tambahkan item keranjang lainnya
    ];
    $total = array_reduce($cartItems, function($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);
    return view('cart', compact('cartItems', 'total'));
})->name('cart');
