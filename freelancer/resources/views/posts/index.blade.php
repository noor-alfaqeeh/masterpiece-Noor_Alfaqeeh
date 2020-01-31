@extends('layout')

@section('content')
    <div class="container-fluid start">
        <header class="section-header">
            <h3 style="display: inline; margin-left: 900px;">Posts</h3>
            <a class="btn btn-primary float-right" role="button" href="{{ route('posts.create') }}" style="margin-right: 350px;">Add Post</a>
        </header>

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
                        @foreach($data as $row)
                            @if($row->id == $post->major_id)
                        <p class="card-text"> Major: {{$row -> major_name}}</p>
                            @endif
                        @endforeach
                        <div class="posts_icon">
                            <ul class="utility-list">
                                <li><i class="fas fa-user-alt"></i><a href="#">{{($post->major_id)+13}}</a></li>
                                <li><i class="far fa-clock"></i><a href="#">{{$post->created_at}}</a></li>
                            </ul>
                        </div>
                        <p class="card-text"><strong>Description</strong></p>
                        <p class="card-text">{{$post -> description}}</p>

                    </div>

                </div>
            </div>
        </div>
        </div>
                @endforeach

    </div>
@endsection
