@extends('layout')

@section('content')
    <div class="container-fluid start">
        <div class="float-right">
            <a class="btn btn-primary" role="button" href="{{ route('posts.create') }}">Add Post</a>
        </div>
            @foreach($posts as $post)
        <div class="posts mx-auto">
        <div class="card my-3">
            <div class="row no-gutters position-relative">
                <div class="position-absolute icon row">
                    <div class="pl-3">
                <a href="{{ route('posts.edit',$post->id) }}">
                    <i class="far fa-edit"></i></a></div>
                    <div class="pl-3">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button>

                        </form>
                    </div>
                </div>
                <div>
                    <div class="card-body py-4 px-4">
                        <h4 class="card-title">{{$post->title}}</h4>
                        <p class="card-text"> Major: {{$post -> major_id}}</p>
                        <div class="posts_icon">
                            <ul class="utility-list">
                                <li><i class="fas fa-user-alt"></i><a href="#">{{($post->major_id)+13}}</a></li>
                                <li><i class="far fa-clock"></i><a href="#">{{$post->created_at}}</a></li>
                            </ul>
                        </div>
                        <p class="card-text"><strong>Description</strong></p>
                        <p class="card-text">{{$post -> description}}</p>
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
