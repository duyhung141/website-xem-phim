@extends('admin.layout')
@section('main-content')
    <div class="card">
{{--        <div class="card-header">--}}
{{--            <h3 class="card-title">Bordered Table</h3>--}}
{{--        </div>--}}

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr class="text-center">
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Path</th>
                    <th>Year</th>
                    <th>Country ID</th>
                    <th>Category ID</th>
                    <th>Director ID</th>
                    <th>Actor ID</th>
                    <th>Views</th>
                    <th>Hot</th>
                    <th>Oscar</th>
                    <th  style="width: 150px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->path}}</td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->country_id}}</td>
                        <td>{{$item->category_id}}</td>
                        <td>{{$item->director_id}}</td>
                        <td>{{$item->actor_id}}</td>
                        <td>{{$item->views}}</td>
                        <td>{{$item->is_hot}}</td>
                        <td>{{$item->is_oscar}}</td>

                        <td>
                            <a href="{{route('admin.director.edit',['id'=>$item->id])}}" class="btn btn-warning">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa ?')"
                               href="{{route('admin.director.delete',['id'=>$item->id])}}"
                               class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item">
            Film
        </li>

    </ol>
@endsection

@section('title')
    List film
@endsection
