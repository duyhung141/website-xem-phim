<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Category;
use App\Models\Country;
use App\Models\Director;
use App\Models\Film;
use http\Env\Request;
use function GuzzleHttp\Promise\all;

class FilmController extends Controller
{
    public function list()
    {
        // TODO: Implement list() method.
        $list = Film::all();
        return view('admin.film.list', compact('list'));
    }

    public function create()
    {
        // TODO: Implement create() method.
        $countries=Country::all();
        $categories=Category::all();
        $directors=Director::all();
        $actors=Actor::all();
        return view('admin.film.create', compact('countries','categories','directors','actors'));
    }


    public function doCreate()
    {
        // TODO: Implement doAdd() method.
        //muốn không set ảnh lên db thì cú pháp như thế nào
        try {
            if (\request()->hasFile('image')) {
                $image = \request()->File('image');
                $image->storeAs('image',$image->getClientOriginalName(),'public');
            }
            $data = \request()->all();
            Film::create($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Thêm mới thành công');
//        return response()->json('success', 'Thêm mới thành công');;
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $obj = Film::find($id);
        $films = Film::where('id', '<>', $id)->get();
        return view('admin.film.edit', compact('obj', 'films'));
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
        $data = $request->all();
        unset($data['_token']);

        try {
            Film::where('id', $id)->update($data);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        Film::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
