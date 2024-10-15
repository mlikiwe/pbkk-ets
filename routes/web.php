<?php

use App\Models\Book;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'total_books' => Book::count(),
        'total_members' => Member::count(),
    ]);
});

Route::get('/daftarmember', function () {
    return view('daftarmember', [
        'title' => 'Daftar Member',
        'members' => Member::all(),
    ]);
});

Route::get('/daftarbuku', function () {
    return view('daftarbuku', [
        'title' => 'Daftar Buku'
    ]);
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', [
        'title' => 'Daftar Peminjaman Buku'
    ]);
});
