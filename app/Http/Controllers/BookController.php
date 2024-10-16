<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {
        $books = Book::all();
        return view('book.daftarbuku', [
            'title' => 'Daftar Buku',
            'books' => $books,
        ]);
    }

    // TODO: Book store
    function store(Request $request) {
        $validatedData = $request->validate([
            'isbn' => 'required|integer',
            'title' => 'required|string',
            'author' => 'required|string',
            'genre_id' => 'required|exists:genre,id',
            'year_published' => 'required|string',
            'stock' => 'required|integer'
        ]);

        $book = Book::create([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'author_name' => $request->author_name,
            'genre_id' => $request->genre_id,
            'year_published' => $request->year_published,
            'stock' => $request->stock,
        ]);

        if ($book) {
            return redirect()->back()->with('success', 'Book Created successfully!');
        }
    }
}
