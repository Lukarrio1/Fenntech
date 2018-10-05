@extends('layouts.cms')
@section('title')
Testiomial | Create
@endsection
@section('content')
<div class="col-lg-12 container">
{!! Form::open(['action' => 'TestController@store', 'method'=>'Post', 'enctype'=> 'multipart/data']) !!}
<div class="form-group">
 {!! Form::label('testimonial','Testimonial',['class'=>'h3 text-white'])!!}
 {{ Form::textarea('testimonial','',[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Description']) }}
</div>
{{ Form::submit('Save',['class'=>'btn btn-outline-primary text-primary btn-lg ']) }}
{!! Form::close() !!}
</div>
@endsection