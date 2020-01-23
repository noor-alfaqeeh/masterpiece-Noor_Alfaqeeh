@extends('layout')

@section('content')

    <div class="container start">
<form class="py-5 px-5 form" action="{{route("profile.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col-md mb-3">
            <label for="validationDefault01">Full name</label>
            <input type="text" name="full_name" class="form-control" id="validationDefault01" placeholder="Enter your full name" required placeholder="Enter your name">
        </div>
    </div>
    <div class="form-group">
        <label>Select Image</label>
        <div>
            <input type="file" name="image" class="form-control"/>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md mb-3">
            <label for="validationDefault03">Country</label>
            <input type="text" name="country" class="form-control" id="validationDefault03" placeholder="Enter your country" required>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md mb-3">
            <label for="validationDefault03">Brief</label>
            <textarea class="form-control" name="brief" id="validationDefault03" placeholder="Write a brief about your self" required rows="3"></textarea>
        </div>
    </div>

    <div class="form-row">
        <label for="validationDefault04">Major</label>
        <select name="major_id" class="custom-select" id="validationDefault04" required>
            @foreach($data as $row)
            <option class="dropdown-item" value="{{$row->id}}">{{$row->major_name}}</option>
                @endforeach
        </select>
    </div>

    <button name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
    </div>

    @endsection
