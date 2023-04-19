<?php

namespace App\Http\Controllers;

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
}
