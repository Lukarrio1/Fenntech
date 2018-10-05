@extends('layouts.cms')
@section('title')
Testimonial {{ $test->id }} |Edit
@endsection
@section('content')
<div class="container col-lg-11 pl-5">
{!! Form::open(['action' => ['TestController@update',$test->id], 'method'=>'Post']) !!}
<div class="form-group">
 {{ Form::label('testimonial','Update Testimonial',['class'=>'h3 text-white']) }}
 {{ Form::textarea('testimonial',$test->testimonial,[ 'id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body']) }}
</div>
{{ Form::submit('Update',['class'=>'btn btn-outline-primary btn-lg text-primary']) }}
{{ Form::hidden('_method','put') }}
{!! Form::close() !!}
</div>
@endsection