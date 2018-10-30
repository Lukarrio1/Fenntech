@extends('layouts.app')
@section('title')
Contact
@endsection
@section('content')
<div class="card text-white col-12 bg-success ">
<div class=" card-body  ">
<p class="h1">Contact Us Today &#x1F4E7;
</p>
</div>
</div>
<div class="container pt-3">
{!! Form::open(['action' => 'ContactController@store', 'method'=>'Post', 'enctype'=> 'multipart/data']) !!}
<div class="form-group">
 {{ Form::label('email','Email') }}
 {{ Form::text('email','',['class'=>'form-control','placeholder'=>'Email','autocomplete'=>'off']) }}
</div>
<div class="form-group">
 {{ Form::label('subject','Subject') }}
 {{ Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject','autocomplete'=>'off']) }}
</div>
<div class="form-group">
 {{ Form::label('body','Body') }}
 {{ Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body','autocomplete'=>'off']) }}
</div>
{{ Form::submit('Send Message',['class'=>'btn btn-primary btn-lg']) }}
{!! Form::close() !!}
</div>
@endsection
