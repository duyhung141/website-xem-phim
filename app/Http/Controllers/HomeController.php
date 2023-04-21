<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function layout(){
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        return view('user.layout',compact('categories','countries'));
    }

    public function index(){
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        return view('user.index',compact('categories','countries'));
    }

    public function movieDetails(){
        return view('user.movie-details');
    }

    public function moviesOption(){
        return view("user.movies-option");
    }

    public function playMovie(){
        return view("user.play-movie");
    }

    public function search(Request $request){
        $searchTerm = $request->input('s');

        $films = Film::where('name', 'LIKE', "%$searchTerm%")
            ->orWhere('description', 'LIKE', "%$searchTerm%")
            ->get();

        return view('user.search', compact('films'));
    }
}
