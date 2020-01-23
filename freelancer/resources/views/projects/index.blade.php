@extends('layout')

@section('content')
    <div class="container-fluid start">
        <div class="text-right">
            <a class="btn btn-primary" role="button" href="{{ route('projects.create') }}">Add Projects</a>
        </div>

            @foreach($projects as $project)

        <div class="blog-card spring-fever">
            <img src="{{ URL::to('/') }}/images/project/{{ $project->img1}}" width="550px"  height="500px" alt="image"/>
            <div class="title-content">
                <h3><a href="#">{{$project -> name}}</a></h3>
                <div class="intro"> <a href="#">Inspiration</a> </div>
            </div>
            <div class="card-info">
                {{ $project->description }}
                <a class="btn btn-primary" href="{{ route('projects.show', $project->id) }}">View</a>

            </div>
            <div class="utility-info">
                <ul class="utility-list">
                    <li><span class="licon icon-like"></span><a href="#">{{18 + ($project->id+3)}}</a></li>
                    <li><span class="licon icon-com"></span><a href="#">{{ 12 + $project->id }}</a></li>
                    <li><span class="licon icon-dat"></span>{{ $project -> created_at }}</li>
                    <li><span class="licon icon-tag"></span><a href="#">Photos</a>, <a href="#">Nice</a></li>
                </ul>
            </div>
            <div class="gradient-overlay"></div>
            <div class="color-overlay"></div>
        </div><!-- /.blog-card --><br><br>

                @endforeach
    </div>
@endsection
