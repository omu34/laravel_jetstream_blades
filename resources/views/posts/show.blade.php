@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{--  <h2> Show Product</h2>  --}}
            </div>
            <br />

        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $post->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $post->image }}" width="500px">
            </div>
        </div>
        <div class="row" style="width:10; margin-left:80px; padding-top:10px; ">
            <div class="col" style="padding-right: -30px;">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <div class="col">
                <a class="btn btn-success" href="{{ route('posts.index') }}">Back</a>
            </div>
            <div class="col">
                <a class="btn btn-danger" href="{{ route('posts.edit', $post->id) }}">Edit</a>
            </div>
        </div>

    </div>
@endsection
