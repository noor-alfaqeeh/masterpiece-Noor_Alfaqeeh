@extends('layout')

@section('content')

    <div class="container start">
        <form class="py-5 px-5 form" action="{{route("profile.update",$data['id'])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault01">Full name</label>
                    <input type="text" name="full_name" class="form-control" id="validationDefault01" value="{{$data->full_name}}" required >
                </div>
            </div>
            <div class="form-group">
                <label>Select Image</label>
                <div>
                    <input type="file" name="image" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/profile/{{ $data->image }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault03">Country</label>
                    <input type="text" name="country" class="form-control" id="validationDefault03" value="{{$data->country}}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault03">Brief</label>
                    <textarea class="form-control" name="brief" id="validationDefault03"  required rows="3">value="{{$data->brief}}"</textarea>
                </div>
            </div>

            <div class="form-row">
                <label for="validationDefault04">Major</label>
                <select name="major_id" class="custom-select" id="validationDefault04" required>
                    @foreach($data2 as $row)
                        <option class="dropdown-item" value="{{$row->id}}">{{$row->major_name}}</option>
                    @endforeach
                </select>
            </div>

            <button name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

@endsection
