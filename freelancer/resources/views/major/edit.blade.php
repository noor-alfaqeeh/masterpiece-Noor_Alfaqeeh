@extends('layouts.app')
@section('content')
    <div align="right">
        <a href="{{ route('major.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('major.update', $data['id'])}}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="major_name" value="{{ $data->major_name }}" class="form-control input-lg" />
            </div>
        </div>
        <br/><br/>
        <div class="form-group text-center">
            <button name="update" type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
@endsection
