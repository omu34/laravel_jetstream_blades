@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{--  <h2>Update Post</h2></h2>  --}}
            </div>
            {{--  <div class="pull-right">
                <a class="btn btn-info" href="{{ route('posts.index') }}"> Back</a>
            </div>  --}}
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $post->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $post->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $post->image }}" width="300px">
                </div>
            </div>
            <div class="row" style="width:10; margin-left:80px; padding-top:10px; ">
                <div class="col" style="padding-right: -30px;">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
                <div class="col">
                    <a class="btn btn-success" href="{{ route('posts.index') }}">Back</a>
                </div>
            </div>


        </div>

    </form>
@endsection
