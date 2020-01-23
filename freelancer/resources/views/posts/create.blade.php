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

<form class="py-5 px-5 form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="validationDefault01">Enter Title</label>
            <input type="text" id="validationDefault01" required name="title" class="form-control" placeholder="Enter a title"/>
        </div>
        <div class="mb-3">
            <label for="validationDefault02">Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Enter a description" id="validationDefault02" value="Otto" required></textarea>
        </div>
        <div class="mb-3">
        <label for="major_id">Major</label>
        <select name="major_id" class="form-control">
            @foreach($data as $row)
                <option class="dropdown-item" value="{{$row->id}}">{{$row->major_name}}</option>
            @endforeach
        </select>
    </div>


    <br/>
    <input type="submit" name="add" class="btn btn-primary" value="Add Post" />
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>


</form>
</div>

    @endsection
