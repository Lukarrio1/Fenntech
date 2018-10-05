@extends('layouts.cms')
@section('title')
Team | Edit   
@endsection
@section('content')
<div class="col-lg-11 container">
{!! Form::open(['action' => ['TeamController@update',$team->id], 'method'=>'Post','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('Name','Name',['class'=>'h3 text-white']) }}
 {{ Form::text('Name',$team->Name,['class'=>'form-control','placeholder'=>'title']) }}
</div>
<div class="form-group">
 {{ Form::label('Position','Position',['class'=>'h3 text-white']) }}
 {{ Form::text('Position',$team->Position,['class'=>'form-control','placeholder'=>'title']) }}
</div>
<div class="form-group">
 {{ Form::label('Description','Description',['class'=>'h3 text-white']) }}
 {{ Form::textarea('Description',$team->description,[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body']) }}
</div>
{{ Form::submit('Update',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{{ Form::hidden('_method','put') }}
{!! Form::close() !!}
</div>
</div>
@endsection
