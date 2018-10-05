@extends('layouts.cms')
@section('title')
@if(count($results)<2)
Result ({{ count($results) }})
@else
 Results ({{ count($results) }})
@endif
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
@section('counter')
{{--  results counter  --}}
<div class="row justify-content-center">
                <div class="btn btn-outline-primary  text-primary text-center btn-lg">
                     @if(count($results)<2)
                     ({{ count($results) }}) Result
                    @else
                     ({{ count($results) }})  Results
                    @endif</div>   
                </div>
            @endsection
 @section('content')
    {{--  the actual results thats if any is there --}}
            @foreach($results as $result)
            <div class="card pt-2  col-lg-8 pb-3 col-xs-12 offset-lg-2 bg-dark">
                <div class="card-header  text-primary text-center bg-dark h3 ">From: {{ $result->email }}</div>
                <div class="card-body  auth_user_color text-center text-white">
                        <p class="h3 text-white">Subject :{{ $result->subject }}</p>
                        <p class="h4  text-white">{{ date('M j, Y h:ia', strtotime($result->created_at  ))}}</p>
                        <div class="pb-3"> 
                            <div class="card-footer">
                        <div class="pb-2"> <a href="/contact/{{ $result->id }}" class="btn btn-outline-dark text-primary text-center btn-lg">View message</a></div>
                    </div>
                        </div>
                       
                </div>
                </div>
            @endforeach 
       
    </div>
@endsection
