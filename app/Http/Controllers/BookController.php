<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {
        $books = Book::all();
        $genres = Genre::all();
        return view('book.daftarbuku', [
            'title' => 'Daftar Buku',
            'books' => $books,
            'genres' => $genres,
        ]);
    }

    function store(Request $request) {
        $request->validate([
            'isbn' => 'required|string',
            'title' => 'required|string',
            'author_name' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'year_published' => 'required|string',
            'stock' => 'required|integer',
        ]);

        $formattedGenreId = (int)$request->genre_id;
        // return $request;

        $book = Book::create([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'author_name' => $request->author_name,
            'genre_id' => $formattedGenreId,
            'year_published' => $request->year_published,
            'stock' => $request->stock,
        ]);

        if ($book) {
            return redirect()->back()->with('success', 'Book Created successfully!');
        }
    }
}
