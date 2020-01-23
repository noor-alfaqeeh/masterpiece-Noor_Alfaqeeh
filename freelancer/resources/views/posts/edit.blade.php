@extends('layout')

@section('content')


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container start">

        <form class="py-5 px-5 form" method="post" action="{{ route('posts.update',$posts->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label>Enter Title</label>
                <input type="text" name="title" class="form-control" value="{{$posts->title}}"/>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control">value="{{$posts->description}}"</textarea>
                </div>
                <div class="mb-3">
                    <label for="major_id">Major</label>
                    <select name="major_id" class="form-control">
                        @foreach($majors as $major)
                            <option class="dropdown-item" value="{{$major->id}}">{{$major->major_name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <br/>
            <div>
                <input type="submit" name="add" class="btn btn-primary" value="confirm" />
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
            </div>

        </form>
    </div>

@endsection
