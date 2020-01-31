@extends('layout')

@section('content')
    <div class="container-fluid start">
        <header class="section-header">
            <h3>Our Portfolio</h3>
        </header>
        <div id="our-work">
        <div class="row row-eq-height justify-content-center pt-4">
        @foreach($projects as $project)
                <div class="col-lg-4 mb-4">
            <div class="blog-card spring-fever">
                <img src="{{ URL::to('/') }}/images/project/{{ $project->img1}}" width="550px"  height="500px" alt="image"/>
                <div class="title-content">
                    <h3><a href="#">{{$project -> name}}</a></h3>
                    @foreach($users as $user)
                        @if($user->id == $project->user_id)
                    <div class="intro"> <a href="#">{{$user->name}}</a> </div>
                        @endif
                    @endforeach
                </div>
                <div class="card-info">
                    <div class="text-truncate">
                    {{ $project->description }}</div>
                    <a class="btn btn-primary" href="{{ route('our-work.show', $project->id) }}">View</a>

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
            </div><!-- /.blog-card --></div><br><br>

        @endforeach
        </div>
        </div>
    </div>
@endsection
