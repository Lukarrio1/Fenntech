@extends('layouts.cms')
@section('title')
Job | {{ $post->title }}
@endsection
@section('content')
<div class="row ">
        <div class="col-lg-8 pb-3 col-xs-12 offset-lg-2">
                <div class="wel-atm text-center col-lg-12  pb-2"><p class="h3 text-dark"></p></div>
            <div class="card pt-2  bg-dark">
                <div class="card-header  text-white text-center bg-dark h3 ">{{ $post->title }}</div>
                <div class="card-body">
                        <div class="col-lg-12 text-white h4">{!! $post->body !!}</</div>
                    <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center"><a href="/Jobs/{{ $post->id }}/edit" class="btn btn-outline-warning  btn-lg text-warning">Edit</a></div>  
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center">
                                {!! Form::open(['action'=>['JobsController@destroy',$post->id], 'method'=>'post', 'class'=>'pull-right']) !!}
                                {{ Form::submit('Delete',['class'=>'btn btn-outline-danger text-danger btn-lg ']) }}
                                {{ Form::hidden('_method','DELETE') }}
                                {!! Form::close() !!}
                        </div>
                </div>
                </div>
                    </div>
         
            </div>
        </div>
@endsection


