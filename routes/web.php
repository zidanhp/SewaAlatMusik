<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProdukController;

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/listproduk', [ListProdukController::class, 'show'] );
Route::post('/listproduk', [ListProdukController::class, 'simpan'] )->name('produk.simpan');
