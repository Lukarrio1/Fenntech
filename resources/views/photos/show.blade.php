@extends('layouts.app')
@section('title')
{!! $photo->title !!}
@endsection
@section('content')    
<hr><div class="row">
    <div class="col-8 offset-2">
<img class="text-center" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{!! $photo->title !!}" height="600px" width="100%">
</div>
</div>
<div class="row">
    <div class="col-12 text-center">
        <p class="h3">{!! $photo->title !!}</p>    
        <p class="">{!! $photo->description !!}</p>
        <hr>
        <a href="/portfolio/{{ $photo->album_id }}" class="btn btn-lg btn-primary text-center">Back</a>
    </div>

    @if(auth::user())
 <div class="col-12  text-center pt-2">
    {!! Form::open(['action'=>['PhotosController@destroy',$photo->id], 'method'=>'post', 'class'=>'pull-right']) !!}
    {{ Form::submit('Delete',['class'=>'btn btn-danger btn-lg']) }}
    {{ Form::hidden('_method','DELETE') }}
    {!! Form::close() !!}
    </div>

@endif
</div>
@endsection