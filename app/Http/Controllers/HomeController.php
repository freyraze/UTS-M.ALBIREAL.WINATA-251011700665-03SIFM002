<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $ranking = Book::orderBy('id')->take(5)->get();
        $terbaru = Book::orderByDesc('id')->take(6)->get();
        $genres  = Book::select('genre')->distinct()->orderBy('genre')->pluck('genre');

        return view('page.home', compact('ranking', 'terbaru', 'genres'));
    }
}
