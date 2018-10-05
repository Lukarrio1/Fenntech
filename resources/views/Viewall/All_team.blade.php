@extends('layouts.cms')
@section('title')
Team Members
@endsection
@section('nav_dy')
<a href="{{ url('Team/create') }}" class="">
&#x2795;
Team Member 
</a>
@endsection
@section('counter')
<div class="btn btn-outline-dark btn-lg Dy-cms">@if(count($teams)<1)<span class="alert text-danger"> ({{ count($teams) }}) Team Members @endif
@if(count($teams)==1)<span class="alert text-success"> ({{ count($teams) }})Team Member @endif @if(count($teams)>1)<span class="alert text-success"> ({{ count($teams) }}) Team Members @endif
</div>
@endsection
@section('content')
<div class="row justify-content-center">
        @foreach($teams as $team)
         <div class="col-lg-8 pb-3">
             <div class="card auth_user_color ">
                 <div class="card-header text-white text-center">
                     <img src="/storage/team_pic/{{ $team->picture }}" alt="{!! $team->picture !!}"  width="50%" height="400px"></div>
                 <div class="card-body text-white text-center">
                     <p class="  h3 ">{!! $team->Name !!}</p>
                     <p class="h4 ">{!! $team->Position !!}</p>
                     <p class="h4 ">{!! $team->description !!}</p>
                 </div>
                 <div class="card-footer text-center">
             <a href="/Team/{{ $team->id }}" class="btn  btn-outline-primary text-primary btn-lg" >View</a>
                 </div>
             </div>
         </div>
         @endforeach
    </div>
@endsection