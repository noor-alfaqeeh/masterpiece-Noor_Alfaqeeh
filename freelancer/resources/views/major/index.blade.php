@extends('layouts.app')
@section('content')
    <div align="right">
        <a href="{{ route('major.create') }}" class="btn btn-success btn-sm">Suggest Major</a>
    </div>
    <br />

        <table class="table table-bordered table-striped">
            <tr>
                <th width="35%">Name</th>
                <th width="30%">Action</th>
            </tr>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->major_name }}</td>
                    <td>
                        <form action="{{ route('major.destroy', $row->id) }}" method="post">
                            <a href="{{ route('major.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection
