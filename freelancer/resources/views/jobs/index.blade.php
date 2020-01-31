@extends('layout')

@section('content')
    <div class="container-fluid start">
        <header class="section-header text-center pb-4">
            <h3>Find a Job</h3>
        </header>
        @foreach($jobs as $job)
            <div class="posts mx-auto">
                <div class="card my-3">
                    <div class="row no-gutters">
                        <div>
                            <div class="card-body py-4 px-4">
                                <h4 class="card-title">{{$job->title}}</h4>
                                @foreach($users as $user)
                                    @if($user->id == $job->user_id)
                                <p class="card-text">Posted by: {{$user -> name}}</p>
                                    @endif
                                @endforeach

                                @foreach($data as $row)
                                    @if($row->id == $job->major_id)
                                        <p class="card-text"> Major: {{$row -> major_name}}</p>
                                    @endif
                                @endforeach
                                <div class="posts_icon">
                                    <ul class="utility-list">
                                        <li><i class="fas fa-user-alt"></i><a href="#">{{($job->major_id)+13}}</a></li>
                                        <li><i class="far fa-clock"></i><a href="#">{{$job->created_at}}</a></li>
                                    </ul>
                                </div>
                                <p class="card-text"><strong>Description</strong></p>
                                <p class="card-text">{{$job -> description}}</p>
                                <div>
                                    <button type="button" class="btn btn-primary">Bid Now</button>
                                    <button type="button" class="btn btn-outline-primary">Chat</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
