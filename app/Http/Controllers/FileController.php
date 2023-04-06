<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload()
    {
        if (\request()->hasFile('image')) {
            $image = \request()->File('image');
            $image->storeAs('image',$image->getClientOriginalName(),'public');
        }
    }
}
