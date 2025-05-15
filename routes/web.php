<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProdukController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');

// Route untuk Pembeli
Route::get('/pembeli/{id}', [PembeliController::class, 'show'])->name('pembeli.show');

// Route untuk Produk (Contoh menambahkan beberapa route untuk produk)
Route::prefix('produk')->name('produk.')->group(function () {
    Route::get('/', [ProdukController::class, 'index'])->name('index');
    Route::get('/create', [ProdukController::class, 'create'])->name('create');
    Route::post('/', [ProdukController::class, 'store'])->name('store');
    Route::get('/{id}', [ProdukController::class, 'show'])->name('show');
});
?>