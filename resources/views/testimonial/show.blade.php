@extends('layouts.cms')
@section('title')
Testimonial |{{ $test->id }}
@endsection
@section('content')
    <div class="row ">
            <div class="col-lg-8 pb-3 col-xs-12 offset-lg-2">
                <div class="card pt-2  bg-dark">
                    <div class="card-header  text-white text-center bg-dark h4 ">{!! $test->testimonial !!}</div>
                    <div class="card-footer">
                        <div class="row ">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 text-center"><a href="/testimonial/{{ $test->id }}/edit" class="btn btn-outline-warning  btn-lg text-warning">Edit</a></div>  
                       <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 text-center">
                            {!! Form::open(['action'=>['TestController@destroy',$test->id], 'method'=>'post', 'class'=>'pull-right']) !!}
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