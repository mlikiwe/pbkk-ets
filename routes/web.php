<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

Route::get('/daftarmember', function () {
    return view('daftarmember', ['title' => 'Daftar Member']);
});

Route::get('/daftarbuku', function () {
    return view('daftarbuku', ['title' => 'Daftar Buku']);
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', ['title' => 'Peminjaman Buku']);
});
