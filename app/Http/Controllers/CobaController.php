<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CobaController extends Controller
{
    public function create()
{
    $buku = Book::all(); // Ambil semua buku dari database
    return view('welcome', compact('buku'));
}

public function store(Request $request)
{
    // Validate the input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'buku' => 'required|array',
        'buku.*' => 'exists:books,id',  // Validate that each book exists in the 'buku' table
    ]);

    // Retrieve the member based on the provided name
    $member = Member::where('name', $validated['nama'])->firstOrFail();

    // Create a new entry in the borrow table
    $borrow = Borrow::create([
        'member_id' => $member->id,
        'borrow_date' => Carbon::now(),  // Assuming you're capturing when the borrow happens
    ]);

    // Prepare an array to attach books to the borrow pivot table with additional data
    $bookData = [];
    foreach ($validated['buku'] as $bookId) {
        $bookData[$bookId] = [
            'due_date' => Carbon::now()->addDays(7),  // Example: 7-day due date
            'status' => 'belum',  // Default status
        ];
    }

    $borrow->books()->attach($bookData);

    return redirect('/welcome')->with('success', 'Data peminjaman berhasil disimpan.');
}
}
