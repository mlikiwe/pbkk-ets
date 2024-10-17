<?php

use App\Models\Book;
use App\Models\Member;
use App\Models\BorrowBook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\MemberController;

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
Route::resource('peminjamanbuku', BorrowController::class);
Route::put('peminjamanbuku/{id}/return', [BorrowController::class, 'returnBook'])->name('peminjamanbuku.return');

// Route::get('/daftarbuku', function () {
//     return view('daftarbuku', [
//         'title' => 'Daftar Buku',
//         'books' => Book::all(),
//     ]);
// });

// Route::get('/peminjamanbuku', function () {
//     return view('peminjamanbuku', [
//         'title' => 'Daftar Peminjaman Buku',
//         // 'borrowBooks' => BorrowBook::all()
//     ]);
// });
