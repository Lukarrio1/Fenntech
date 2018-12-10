@extends('layouts.cms')
@section('inbox-coun')
@php
 echo count($inbox);
@endphp
@endsection
@section('title')
Jobs
@endsection
@section('nav_dy')
<a href="{{ url('Jobs/create') }}" class=""> &#x2795;
 Job
</a>
@endsection
@section('counter')
<div class="btn btn-outline-dark btn-lg Dy-cms">@if(count($jobs)<1)<span class="alert text-danger"> ({{ count($jobs) }}) Job @endif
@if(count($jobs)==1)<span class="alert text-success"> ({{ count($jobs) }}) Job @endif @if(count($jobs)>1)<span class="alert text-success"> ({{ count($jobs) }}) Jobs @endif
</div>
@endsection
@section('content')
    <div class="row justify-content-center">
        @foreach($jobs as $job)
         <div class="col-lg-10 pb-3">
             <div class="card auth_user_color ">
                 <div class="card-header text-white text-center h3">{!! $job->title !!}</div>
                 <div class="card-body text-white">
                     <p class=" text-center h4 ">{!! $job->body !!}</p>
                 </div>
                 <div class="card-footer text-center">
             <a href="/Jobs/{{ $job->id }}" class="btn  btn-outline-primary text-primary btn-lg" >View</a>
                 </div>
             </div>
         </div>
         @endforeach
    </div>
@endsection
