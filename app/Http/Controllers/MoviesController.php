<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function getMovies(){
        $movies = Movie::all();
        return view('movies', ['movies'=>$movies]);   
    }

    public function getMovie($slug){
        $movie = Movie::where('slug', $slug)->first();
        if($movie){
            return view('moviestream', ['movie'=>$movie]);
        }
        return view('404notfound');
    }
}
