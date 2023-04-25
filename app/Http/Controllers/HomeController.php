<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function showFilm(){
        $films = Film::all();
        return view("user.index",compact("films"));
    }
    
    public function layout()
    {
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        return view('user.layout', compact('categories', 'countries'));
    }

    public function index()
    {
        $categories = \App\Models\Category::all();
        $countries = \App\Models\Country::all();
        return view('user.index', compact('categories', 'countries'));
    }

    public function movieDetails()
    {
        return view('user.movie-details');
    }

    public function moviesOption()
    {
        return view("user.movies-option");
    }

    public function playMovie()
    {
        return view("user.play-movie");
    }

//    public function search(Request $request){
//        $searchTerm = $request->input('s');
//
//        $films = Film::where('name', 'LIKE', "%$searchTerm%")
//            ->orWhere('description', 'LIKE', "%$searchTerm%")
//            ->get();
//
//        return view('user.search', compact('films'));
//    }

    public function search(Request $request)
    {
//        $films = Film::all();
        $films = DB::table('films')->where('name', 'LIKE', '%' . $request->s . '%')->get();

        return view('user.search', compact('films'));
    }

//    public function doSearch(Request $request)
//    {
//        $output = '';
//        $films = DB::table('films')->where('name', 'LIKE', '%' . $request->s . '%')->get();
////        return response()->json($films);
//        if ($films) {
//            foreach ($films as $key => $film) {
//                $output .= '<tr>
//                    <td>' . $film->name . '</td>
//                    </tr>';
//            }
//        }
////            return Response($output);
//        return view('user.layout', compact('output'));
//
//    }

    public function doSearch(Request $request)
    {
        $output = '';
        $films = DB::table('films')->where('name', 'LIKE', '%' . $request->s . '%')->get();
        if ($films) {
            foreach ($films as $key => $film) {
                $output .= '<li>' . $film->name . '</li>';
            }
        }
        return response($output);
//        return response()->json(['data' => $output]);
    }
    public function test(Request $request)
    {
        $request ->validate([
            's'=>'required|min:3',
        ]);

//        $films = Film::all();
        $films = DB::table('films')->where('name', 'like', "%{$request->s}%")->get();
//        dd($films);
        if(empty($films[0]->name) && empty($request->s)){
            return response()->json(['success'=>'false']);
        }
        return response()->json($films);
    }
}
