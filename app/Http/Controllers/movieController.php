<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        $movie = Movie::all();
        $data = [
            "movie" => new Movie(),
            "movies" => $movie,
        ];
        return view('movies.index', $data);
    }
    //
    /*     public function show()
    {
        return view('movies.show');
    } */
}
