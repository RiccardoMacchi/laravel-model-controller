<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $all_movies = Movie::all();
        $title = 'Lista Film';
        return view('home', compact('all_movies','title'));
    }

    public function bestMovies(){
        $all_movies = Movie::where('vote','>=', 9)->get();
        $title = 'I Migliori Film';
        return view('home',compact('all_movies','title'));
    }
    public function worseMovies(){
        $all_movies = Movie::where('vote','<', 8)->get();
        $title = 'I peggiori Film';
        return view('home',compact('all_movies','title'));
    }
    // Funzione dettagli per id
    public function movieDetails($id){
        $movie_details = Movie::find($id);
        return view('moviedetails',compact('movie_details'));
    }
}
