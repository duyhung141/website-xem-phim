<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function showFilm()
    {
        $films = Film::all();
        return view("user.index",compact("films"));
    }
}
?>