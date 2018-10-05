@extends('layouts.cms')
@section('title')
Team | Create  
@endsection
@section('content')
<div class="container col-lg-11 pl-5">
{!! Form::open(['action' => 'TeamController@store', 'method'=>'Post', 'enctype'=> 'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('Name','Name',['class'=>'h3 text-white']) }}
 {{ Form::text('Name','',['class'=>'form-control','placeholder'=>'Firstname lastname']) }}
</div>
<div class="form-group">
 {{ Form::label('Position','Postion',['class'=>'h3 text-white']) }}
 {{ Form::text('Position','',['class'=>'form-control','placeholder'=>'Position in company']) }}
</div>
<div class="form-group">
 {{ Form::label('description','Description',['class'=>'h3 text-white']) }}
 {{ Form::textarea('description','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Description']) }}
</div>
<div class="form-group">
 {{ Form::file('picture',['class'=>'btn-outline-dark btn text-white']) }}
</div>
{{ Form::submit('Save',['class'=>'btn btn-outline-primary text-primary btn-lg']) }}
{!! Form::close() !!}
</div>
@endsection