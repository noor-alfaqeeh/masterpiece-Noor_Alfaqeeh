@extends('layout')

@section('content')
    <div class="container start">
        <header class="section-header pb-4">
            <h3>My Profile</h3>
        </header>
        @foreach($profile as $row)
        <div class="row mt-4">
            <div class="col-3">
            <img src="{{ URL::to('/') }}/images/profile/{{ $row->image}}" class="img-thumbnail" width="250"  alt="image"/>
        </div>

            <div class="col-9">
                <dl class="row">

                    <dt class="col-sm-4"><h4>Full Name</h4> </dt>
                    <dd class="col-sm-8"><p>{{ $row -> full_name }}</p></dd>

                    <dt class="col-sm-4"><h4>Country</h4></dt>
                    <dd class="col-sm-8"><p>{{ $row -> country }}</p></dd>

                    <dt class="col-sm-4"><h4>Brief</h4></dt>
                    <dd class="col-sm-8"><p>{{ $row -> brief }}</p></dd>

                    <dt class="col-sm-4"><h4>Major</h4></dt>
                    @foreach($data as $info)
                        @if($info->id == $row->major_id)
                    <dd class="col-sm-8"><p>{{ $info -> major_name }}</p></dd>
                        @endif
                    @endforeach

                </dl>

            </div>
        </div>
        <div class="text-right">
            @csrf
            @method('DELETE')
            <a href="{{ route('profile.edit', $row->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
    @endforeach
    @endsection
