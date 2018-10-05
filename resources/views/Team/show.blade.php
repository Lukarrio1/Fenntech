@extends('layouts.cms')
@section('title')
TM | {{ $team->Name }}  
@endsection
@section('content')
<div class="row ">
        <div class="col-lg-8 pb-3 col-xs-12 offset-lg-2">
            <div class="card pt-2  bg-dark">
                <div class="card-header  text-primary text-center bg-dark h3 "><img src="/storage/team_pic/{{ $team->picture }}" class="pt-3" alt="" height="400px" width="60%"></div>
                <div class="card-body">
                        <div class="col-lg-12 text-white text-center h1">{!! $team->Name  !!}</div>
                        <div class="col-lg-12 text-white text-center h3">{!! $team->Position !!}</div>
                        <div class="col-lg-12 text-white text-center h4">{!! $team->description !!}</div>
                        <div class="row card-footer">
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center "><a href="/Team/{{ $team->id }}/edit" class="btn btn-outline-warning  btn-lg text-warning">Edit</a></div>  
                            <div class="col-lg-6 col-md-4 col-sm-12 col-sx-12 text-center ">
                                {!! Form::open(['action'=>['TeamController@destroy',$team->id], 'method'=>'post', 'class'=>'pull-right']) !!}
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