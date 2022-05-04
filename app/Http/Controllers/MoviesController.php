<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index() {
        $movies = Movie::all();
        dd($movies);
        $data = [
            'movies' => $movies,
        ];
        return view('Home', $data);
    }
}
