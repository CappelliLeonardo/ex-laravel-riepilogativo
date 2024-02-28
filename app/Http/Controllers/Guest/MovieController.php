<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie(){
        // $movie = Movie::all();
        return view("subpages.movie");
    } 
}
