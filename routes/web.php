<?php

use App\Http\Controllers\MemberController;
use App\Models\Book;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'total_books' => Book::count(),
        'total_members' => Member::count(),
    ]);
});

// Route::get('/daftarmember', function () {
//     return view('daftarmember', [
//         'title' => 'Daftar Member',
//         'members' => Member::all(),
//     ]);
// });

// Route::get('/daftarmember', [MemberController::class, 'index']);
// Route::post('/daftarmember', [MemberController::class, 'store']);
Route::resource('daftarmember', MemberController::class);

Route::get('/daftarbuku', function () {
    return view('daftarbuku', [
        'title' => 'Daftar Buku',
        'books' => Book::all(),
    ]);
});

Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', [
        'title' => 'Daftar Peminjaman Buku'
    ]);
});
