<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Models\Book;
use App\Models\BorrowBook;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard', [
        'total_books' => Book::count(),
        'total_members' => Member::count(),
        'newest_members' => Member::orderBy('id', 'desc')->take(3)->get(),
        'newest_books' => Book::orderBy('id', 'desc')->take(3)->get()
    ]);
});

Route::resource('daftarmember', MemberController::class);
Route::resource('daftarbuku', BookController::class);

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', [
        'title' => 'Daftar Peminjaman Buku',
        // 'borrowBooks' => BorrowBook::all()
    ]);
});
