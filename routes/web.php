<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;


Route::get('/home', function () {
    return view('pages.home');
});