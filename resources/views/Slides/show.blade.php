@extends('layouts.cms')
@section('title')
Slide | {{ $slide->slides }}  
@endsection
@section('content')
<div class="row ">
        <div class="col-lg-8 pb-3 col-xs-12 offset-lg-2">
            <div class="card pt-2  bg-dark">
                <div class="card-body">
            <img src="/storage/Slides/{{ $slide->slides }}" class="pt-3" alt="" height="400px" width="100%" >
            <div class="text-center h3 text-white"><p>Caption:{!! $slide->captions !!}</p></div>
                        <div class="row card-footer">
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center ">
                                <a href="/Slides/{{ $slide->id }}/edit" class="btn btn-outline-warning  btn-lg text-warning">Edit</a></div>  
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center ">
                                {!! Form::open(['action'=>['SlideController@destroy',$slide->id], 'method'=>'post', 'class'=>'pull-right']) !!}
                                {{ Form::submit('Delete',['class'=>'btn btn-outline-danger text-danger btn-lg ']) }}
                                {{ Form::hidden('_method','DELETE') }}
                                {!! Form::close() !!}
                        </div>
                </div>
                </div>
                    </div>
         
            </div>
        </div>
</div>
@endsection