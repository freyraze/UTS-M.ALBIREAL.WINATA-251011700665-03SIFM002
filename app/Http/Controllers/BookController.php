<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        if ($request->filled('q')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->q . '%')
                  ->orWhere('author', 'like', '%' . $request->q . '%');
            });
        }

        $books  = $query->orderBy('title')->paginate(6)->withQueryString();
        $genres = Book::select('genre')->distinct()->orderBy('genre')->pluck('genre');

        return view('page.buku', compact('books', 'genres'));
    }

    public function show(Book $book)
    {
        $lainnya = Book::where('id', '!=', $book->id)
            ->where('genre', $book->genre)
            ->get();

        return view('page.buku-detail', compact('book', 'lainnya'));
    }
}
