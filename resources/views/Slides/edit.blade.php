@extends('layouts.cms')
@section('title')
Caption | Edit   
@endsection
@section('content')
<div class="col-lg-11 container">
{!! Form::open(['action' => ['SlideController@update',$slide->id], 'method'=>'Post','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
 {{ Form::label('caption','Caption',['class'=>'h3 text-white']) }}
 {{ Form::textarea('caption',$slide->captions,[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Caption']) }}
</div>
{{ Form::submit('Update',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{{ Form::hidden('_method','put') }}
{!! Form::close() !!}
</div>
</div>
@endsection
