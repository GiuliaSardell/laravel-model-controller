<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function movies(){
        //devo richiamare il model
        $movies = Movie::all();
        // dump($movies);
        return view('movies', compact('movies'));
    }
}
