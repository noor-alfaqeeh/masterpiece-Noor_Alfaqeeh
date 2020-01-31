@extends('layout')

@section('content')

    <div class="container start">
        <header class="section-header text-center">
            <h3>Edit Project</h3>
        </header>
        <form class="py-5 px-5 form" action="{{route("projects.update",$projects['id'])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault01">Project name</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$projects->name}}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="validationDefault03">Description</label>
                    <textarea class="form-control" name="description" id="validationDefault03" required rows="3">{{$projects->description}}</textarea>
                </div>
            </div>
            <h3 class="text-center">Select Images</h3>
            <div class="form-group">
                <label>First Image</label>
                <div>
                    <input type="file" name="img1" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/project/{{ $projects->img1 }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image1" value="{{ $projects->img1 }}" />
                </div>
            </div>

            <div class="form-group">
                <label>Second Image</label>
                <div>
                    <input type="file" name="img2" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/project/{{ $projects->img2 }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image2" value="{{ $projects->img2}}" />
                </div>
            </div>

            <div class="form-group">
                <label>Third Image</label>
                <div>
                    <input type="file" name="img3" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/project/{{ $projects->img3 }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image3" value="{{ $projects->img3}}" />
                </div>
            </div>

            <div class="form-group">
                <label>Fourth Image</label>
                <div>
                    <input type="file" name="img4" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/project/{{ $projects->img4 }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image4" value="{{ $projects->img4}}" />
                </div>
            </div>

            <div class="form-group">
                <label>Fifth Image</label>
                <div>
                    <input type="file" name="img5" class="form-control"/>
                    <img src="{{ URL::to('/') }}/images/project/{{ $projects->img5 }}" class="img-thumbnail" width="100" />
                    <input type="hidden" name="hidden_image5" value="{{ $projects->img5}}" />
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('projects.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>

@endsection
