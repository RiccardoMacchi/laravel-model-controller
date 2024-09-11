<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $all_movies = Movie::all();
        return view('home', compact('all_movies'));
    }

    public function bestMovies(){
        $all_movies = Movie::where('vote','>=', 9)->get();
        return view('bestmovies',compact('all_movies'));
    }
    public function worseMovies(){
        $all_movies = Movie::where('vote','<', 8)->get();
        return view('worsemovies',compact('all_movies'));
    }
    // Funzione dettagli per id
    public function movieDetails($id){
        $movie_details = Movie::find($id);
        return view('moviedetails',compact('movie_details'));
    }
}
