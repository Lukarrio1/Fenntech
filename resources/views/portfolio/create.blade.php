@extends('layouts.cms')
@section('title')
Create
@endsection
@section('content')
<div class="container col-lg-12">
{!! Form::open(['action' => 'AlbumsController@store', 'method'=>'Post', 'enctype'=> 'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('name','Album name',['class'=>'text-white h3']) }}
 {{ Form::text('name','',['class'=>'form-control','placeholder'=>'Album name']) }}
</div>
<div class="form-group">
 {{ Form::label('description','Album description',['class'=>'text-white h3']) }}
 {{ Form::textarea('description','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Album description']) }}
</div>
<div class="form-group">
{{ Form::file('cover_image') }}
</div>
{{ Form::submit('Save',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{!! Form::close() !!}
</div>
@endsection


