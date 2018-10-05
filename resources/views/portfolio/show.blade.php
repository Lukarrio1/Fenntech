@extends('layouts.app')
@section('title')
{!! $album->name !!}   
@endsection
@section('content')
<div class="row pt-2">
    <div class="col-12 text-center">
<p class="h4">
<img src="/storage/album_covers/{{ $album->cover_image }}" alt="" class="inner-img">
<br>
    {!! $album->name !!}
    <p class="h4">{!! $album->description!!}</p>
    @if(auth::user())
    <a href="/photos/create/{{ $album->id }}" class="btn bg-primary btn-lg text-white text-center">Upload photo to  {!! $album->name !!}</a><br>
    @if(count($album->photos )<1)
    <div class="col pt-2">
        {!! Form::open(['action'=>['AlbumsController@destroy',$album->id], 'method'=>'post', 'class'=>'text-center']) !!}
        {{ Form::submit('Delete',['class'=>'btn btn-danger btn-lg']) }}
        {{ Form::hidden('_method','DELETE') }}
        {!! Form::close() !!}
        </div>
    @endif
    @endif
</p>
<hr>
<div class="row">
    @foreach($album->photos as $photo)
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
    <a href="/photos/{{ $photo->id }}">
    <img class="thumbnail" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}" height="300px" width="100%">
    <br>
    <p class="h4 menu-item">{{ $photo->title }}</p>
    </a>
    </div>
    @endforeach
</div>
</div>
</div>
@endsection
