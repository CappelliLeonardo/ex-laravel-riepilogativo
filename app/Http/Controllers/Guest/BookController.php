<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book()
    {
        /* $books = Book::all(); */
        return view('subpages.book');
    } 
}
