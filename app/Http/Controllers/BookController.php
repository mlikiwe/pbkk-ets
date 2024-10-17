<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index() {
        $books = Book::with('genre')->paginate(20);
        $genres = Genre::all();
        return view('book.daftarbuku', [
            'title' => 'Book List',
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

    function update(Request $request, $id) {
        $request->validate([
            'isbn' => 'required|string',
            'title' => 'required|string',
            'author_name' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'year_published' => 'required|string',
            'stock' => 'required|integer',
        ]);

        $formattedGenreId = (int)$request->genre_id;

        $update = Book::find($id)->update([
            'isbn' => $request->isbn,
            'title' => $request->title,
            'author_name' => $request->author_name,
            'genre_id' => $formattedGenreId,
            'year_published' => $request->year_published,
            'stock' => $request->stock,
        ]);

        if ($update) {
            return redirect()->back()->with('success', 'Book Updated successfully!');
        }
    }

    function destroy($id) {
        $delete = Book::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success', 'Book Deleted successfully!');
        }
    }
}
