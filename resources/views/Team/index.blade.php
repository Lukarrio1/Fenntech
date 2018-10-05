@extends('layouts.app')
@section('title')
Team Member
@endsection
@section('content')
<div class="card text-white col-12 bg-success ">
<div class=" card-body ">
<p class="h1">@if(count($teams)<=1)Our Team Member @else Our Team Members @endif
</p>
</div>
</div>
<div class="container pt-3">
<div class="row">
@if(count($teams)>0)
@foreach($teams as $team)
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
<img src="/storage/team_pic/{{ $team->picture }}" alt="" height="250px" width="100%">
@if(auth::user())
<h3> <a href="/Team/{{ $team->id }}">{{ $team->Name }}</a></h3>
@else 
<h3>{{ $team->Name }}</h3>
@endif
<p>{{ $team->Position }}</p>
{!! $team->description!!}
</div>
@endforeach
@else
<div class="alert alert-danger col-12 h3 text-center" role="alert">
There are no team members &#x1F615;
</div>
@endif
</div>
</div>
@endsection