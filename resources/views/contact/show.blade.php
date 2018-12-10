@extends('layouts.cms')
@section('inbox-coun')
@php
echo count($inbox);
@endphp
@endsection
@section('title')
Inbox |{{ $mail->subject }}
@endsection
@section('nav_dy')
{!! Form::open(['action' => 'ContactController@Search', 'method'=>'Post', 'enctype'=> 'multipart/form-data', 'class'=>'form-inline ']) !!}
<div class="form-group">
{{ Form::label('','') }}
{{ Form::text('search','',['class'=>'form-control ','placeholder'=>'Search'])}}
</div>
{{ Form::submit('&#x1F50D;',['class'=>'invisible']) }}
{!! Form::close() !!}
@endsection
@section('content')

{{--  Message --}}
<div class="row justify-content-center">

<div class="col-lg-8 pb-3 col-xs-12">
        <div class="wel-atm text-center  col-lg-12 pb-2"><p class="h3 text-dark"></p></div>
    <div class="card pt-2  bg-dark">
        <div class="card-header  text-white  bg-dark h3 ">From: {!! $mail->email !!}</div>

        <div class="card-body  bg-dark  text-success">
                <p class="h3 text-white">Subject : {!! $mail->subject !!}</p>
                <p class="h4  text-white">Body : {!! $mail->body !!}</p>
                <p class="h4  text-white">{{ date('M j, Y h:ia', strtotime($mail->created_at ))}}</p>
                <div class="col-12 pb-3">
                </div>
                <div class="card-footer">
                <div class="pt-2">
                {!! Form::open(['action'=>['ContactController@destroy',$mail->id], 'method'=>'post', 'class'=>'']) !!}
                {{ Form::submit('Delete',['class'=>'btn btn-outline-danger text-danger btn-lg']) }}
                {{ Form::hidden('_method','DELETE') }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        </div>
    </div>

</div>
@endsection
