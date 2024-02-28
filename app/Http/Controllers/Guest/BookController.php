<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function book()
    {
        $books = Book::all();
        return view('subpages.book', compact('books'));
    } 
}
