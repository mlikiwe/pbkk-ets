<?php

use App\Http\Controllers\CobaController;
use App\Models\Book;
use App\Models\BorrowBook;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('welcome', [CobaController::class, 'create'])->name('welcome');
Route::post('welcome', [CobaController::class, 'store'])->name('welcome');

Route::get('/', function () {
    return view('dashboard', [
        'total_books' => Book::count(),
        'total_members' => Member::count(),
        'newest_members' => Member::orderBy('id', 'desc')->take(3)->get(),
        'newest_books' => Book::orderBy('id', 'desc')->take(3)->get()
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
        'title' => 'Daftar Buku',
        'books' => Book::all(),
    ]);
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', [
        'title' => 'Daftar Peminjaman Buku',
        'borrowBooks' => BorrowBook::all()
    ]);
});
