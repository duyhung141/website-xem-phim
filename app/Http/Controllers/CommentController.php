<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request){
        $user = Auth::user();
        $movie_id = $request->input('movie_id');
        $movie = Movie::findOrFail($movie_id);
        return view("user.movie-details",["movie"=>$movie]);

}
    public function store(Request $request){
        $user = Auth::user();
        $movie_id = $request->input('movie_id');
        $movie = Movie::findOrFail($movie_id);
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->movie = $movie->id;
        $comment->content = $request->input('content');
        $comment->save();
        return redirect()->back();
    }
}
