<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/daftarmember', function () {
    return view('daftarmember');
});

Route::get('/daftarbuku', function () {
    return view('daftarbuku');
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku');
});
