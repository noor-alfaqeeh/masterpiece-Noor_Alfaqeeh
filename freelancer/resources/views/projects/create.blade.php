@extends('layout')

@section('content')

    <div class="container start">

        <form class="py-5 px-5 form" action="{{route("projects.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault01">Project name</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Enter the project name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault03">Description</label>
                    <textarea class="form-control" name="description" id="validationDefault03" placeholder="Write about the project" required rows="3"></textarea>
                </div>
            </div>
            <h3>Select Images</h3>
            <div class="form-group">
                <label>Select Image</label>
                <div>
                    <input type="file" name="img1" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <label>Select Image</label>
                <div>
                    <input type="file" name="img2" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <label>Select Image</label>
                <div>
                    <input type="file" name="img3" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <label>Select Image </label>
                <div>
                    <input type="file" name="img4" class="form-control"/>
                </div>
            </div>

            <div class="form-group">
                <label>Select Image</label>
                <div>
                    <input type="file" name="img5" class="form-control"/>
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('projects.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>

@endsection
