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
        $validator = $request->validate([
            'isbn' => 'required|string',
            'title' => 'required|string',
            'author_id' => 'required|exists:author,id',
            'genre_id' => 'required|exists:genre,id',
            'year_published' => 'required|string',
            'stock' => 'required|integer'
        ]);
    }
}
