@extends('layouts.cms')
@section('title')
Carousel
@endsection
@section('content')
<div class="container col-lg-12">
<p class="h3 text-white">Upload carousel image</p>
{!! Form::open(['action' => 'SlideController@store', 'method'=>'Post', 'enctype'=> 'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('caption','Photo caption',['class'=>'text-white h5']) }}
 {{ Form::textarea('caption','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Photo description']) }}
</div>
<div class="form-group">
{{ Form::file('slide') }}
</div>
{{ Form::submit('Create',['class'=>'btn btn-outline-primary text-primary btn-lg']) }}
{!! Form::close() !!}
</div>
@endsection


