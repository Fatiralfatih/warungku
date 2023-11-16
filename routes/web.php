<?php

use App\Http\Controllers\AlamatController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Pelayan\PelayanMenuController;
use App\Http\Controllers\Pelayan\PelayanPesananController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => ["auth"]], function () {
    // home pelayan
    Route::get('/', function () {
        return view('pelayan.home',[
            'costumer' => App\Models\User::where('role','costumer')->count(),
            'pesanan' => App\Models\Pesanan::count()
        ]);
    })->name('home');
// dada didi dudu
// push reng
    Route::middleware(['pelayan'])->prefix('pelayan')->group(function () {
        // data makanan for pelayan
        Route::get('menu', [PelayanMenuController::class, 'index'])->name('pelayan.menu');
        Route::get('menu/create', [PelayanMenuController::class, 'create'])->name('pelayan.menu.create');
        Route::post('menu/store', [PelayanMenuController::class, 'store'])->name('pelayan.menu.store');
        Route::get('menu/edit/{id}', [PelayanMenuController::class, 'edit'])->name('pelayan.menu.edit');
        Route::put('menu/update/{id}', [PelayanMenuController::class, 'update'])->name(('pelayan.menu.update'));
        Route::delete('menu/delete/{id}', [PelayanMenuController::class, 'delete'])->name('pelayan.menu.delete');
        // data gambar for pelayan
        Route::get('menu/gambar/{id}', [PelayanMenuController::class, 'gambar'])->name('pelayan.edit.gambar');
        Route::post('menu/tambah/gambar/{id}', [PelayanMenuController::class, 'gambarTambah'])->name('pelayan.tambah.gambar');
        Route::put('menu/update/gambar/{id}', [PelayanMenuController::class, 'gambarupdate'])->name('pelayan.update.gambar');
        Route::delete('menu/delete/gambar/{id}', [PelayanMenuController::class, 'gambarDelete'])->name('pelayan.delete.gambar');
        // data pesanan for pelayan
        Route::get('data-pesanan', [PelayanPesananController::class, 'dataPesanan'])->name('data.pesanan');
        Route::post('terima-pesanan/{id}', [PelayanPesananController::class, 'terima'])->name('pesanan.terima');
    });


    // logout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    // pesanan for costumer
    Route::get('pesanan/menu/show', [PesananController::class, 'show'])->name('pesanan.show');
    Route::post('pesanan/checkout', [PesananController::class, 'checkout'])->name('pesanan.checkout');
    Route::get('pesanan/detail', [PesananController::class, 'detail'])->name('pesanan.detail');
    Route::get('pesanan/cancel/{id}', [PesananController::class, 'cancel'])->name('pesanan.cancel');

    // create alamat pesanan for costumer
    Route::post('pesanan/tambah-alamat', [AlamatController::class, 'store'])->name('pesanan.tambah.alamat');
    Route::get('pesanan/edit-alamat/{alamat:id}', [AlamatController::class, 'edit'])->name('pesanan.edit.alamat');
    Route::put('pesanan/update-alamat/{alamat}', [AlamatController::class, 'update'])->name('pesanan.update.alamat');
    Route::delete('pesanan/delete-alamat/{alamat}', [AlamatController::class, 'delete'])->name('pesanan.delete.alamat');

    // keranjang
    Route::get('keranjang', [KeranjangController::class, 'index'])->name('keranjang');
    Route::post('keranjang/store/{id}', [KeranjangController::class, 'store'])->name('keranjang.store');
    Route::post('keranjang/update/{id}', [KeranjangController::class, 'update'])->name('keranjang.update');
    Route::delete('keranjang/delete/{id}', [KeranjangController::class, 'delete'])->name('keranjang.delete');
});
Route::group(['middleware' => 'guest'], function () {
    // register
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register/store', [RegisterController::class, 'store'])->name('register.store');
    // login
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login/auth', [LoginController::class, 'auth'])->name('login.auth');
});
// menu makanan/minuman for costumer
Route::get('menu', [MenuController::class, 'menu'])->name('menu');
Route::get('menu/show/{menu:nama}', [MenuController::class, 'show'])->name('menu.show');
