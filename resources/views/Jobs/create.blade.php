@extends('layouts.cms')
@section('title')
Job | Create
@endsection
@section('content')
<div class="container col-lg-12">
{!! Form::open(['action' => 'JobsController@store', 'method'=>'Post', 'enctype'=> 'multipart/data']) !!}
<div class="form-group form">
 {{ Form::label('title','Job Title',['class'=>'h3 text-white']) }}
 {{ Form::text('title','',['class'=>'form-control','placeholder'=>'title']) }}
</div>
<div class="form-group">
 {{ Form::label('body','Requirements',['class'=>'h3 text-white']) }}
 {{ Form::textarea('body','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Requirements']) }}
</div>
{{ Form::submit('Save',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{!! Form::close() !!}
</div>
@endsection


