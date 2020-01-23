@extends('layouts.app')
@section('content')
    <div align="right">
        <a href="{{ route('major.index') }}" class="btn btn-default">Back</a>
    </div>

    <form method="post" action="{{ route('major.store') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label class="col-md-4 text-right">Enter Name</label>
            <div class="col-md-8">
                <input type="text" name="major_name" class="form-control input-lg" />
            </div>
        </div>
        <br/><br/>
        <div class="form-group text-center">
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Suggest" />
        </div>

    </form>
@endsection
