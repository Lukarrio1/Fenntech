@extends('layouts.cms')
@section('title')
Edit | {{ $post->title }}
@endsection
@section('content')
<div class="container col-lg-11">
{!! Form::open(['action' => ['JobsController@update',$post->id], 'method'=>'Post']) !!}
<div class="form-group">
 {{ Form::label('title','Job title',['class'=>'h3 text-white']) }}
 {{ Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title']) }}
</div>
<div class="form-group">
 {{ Form::label('body','Job description',['class'=>'h3 text-white']) }}
 {{ Form::textarea('body',$post->body,[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body']) }}
</div>
{{ Form::submit('Update',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{{ Form::hidden('_method','put') }}
{!! Form::close() !!}
</div>
@endsection

