@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br/>
            <br/>
                {{--  <h2>Home</h2>  --}}
            </div>

            <div class="pull-center">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Add Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $post->image }}" width="100px"></td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->detail }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-info" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
@endsection
