@extends('admin.layout')
@section('main-content')
    <div class="card card-primary">
        <div class="card-header">
        </div>

        <form method="post" action="{{route('admin.film.do-create')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="2"></textarea>
                </div>
                <div class="form-group d-grid gap-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="btn btn-info mx-2" id="image"/>
                </div>
                <div class="form-group">
                    <label for="path">Path</label>
                    <input type="text" name="path" class="form-control" id="path" placeholder="Enter Path">
                </div>
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" class="form-control" id="year" placeholder="Enter Year">
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div>
                        <label for="country_id">Country</label>
                        <select name="country_id" id="country_id">
                            <option value="">None</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id">
                            <option value="">None</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="director_id">Director</label>
                        <select name="director_id" id="director_id">
                            <option value="">None</option>
                            @foreach($directors as $director)
                                <option value="{{$director->id}}">{{$director->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div>
                        <label for="actor_id">Actor</label>
                        <select name="actor_id" id="actor_id" class="selectpicker" multiple aria-label="size 3 select example">
                            <option  value="">None</option>
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">{{$actor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-check d-flex align-items-center">
                    <div class="pr-4">
                        <input class="p-4 form-check-input" type="checkbox">
                        <label class="form-check-label" for="actor_id">Is Hot</label>
                    </div>
                    <div class="pl-4">
                        <input class="p-4 form-check-input" type="checkbox">
                        <label class="form-check-label" for="actor_id">Is Oscar</label>
                    </div>
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
            <a href="{{route('admin.film.list')}}">Film</a>
        </li>
        <li class="breadcrumb-item active">
            Create
        </li>
    </ol>
@endsection

@section('title')
    Create Film
@endsection
