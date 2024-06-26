@extends('admin.layout')
@section('main-content')
    <div class="card card-primary">
        <div class="card-header">
        </div>

        <form method="post" action="{{route('admin.director.do-edit',['id'=>$obj->id])}}">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{$obj->name}}" name="name" class="form-control" id="name"
                           placeholder="Enter Name">
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item">
            <a href="{{route('admin.director.list')}}">director</a>
        </li>
        <li class="breadcrumb-item active">
            Edit
        </li>
    </ol>
@endsection

@section('title')
    Edit Director
@endsection
