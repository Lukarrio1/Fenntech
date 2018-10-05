@extends('layouts.app')
@section('title')
Jobs
@endsection
@section('content')
<div class="card text-white col-12 bg-success ">
    <div class=" card-body">
        <p class="h1">Job Openings</p>
    </div>
</div>
<div class="container-fluid  pt-2">
    @if(count($posts)>0)
    <div class="row">
   @foreach($posts as $post)
       <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2">
       @if(auth::user())
       <p class="h1"> <a href="/Jobs/{{ $post->id }}" >{{ $post->title }}</a></p>
       @else
      <p class="h1">{{ $post->title }}</p>
       @endif
       <p class="h3">Requisite Skills and Background</p>
       <p>{!! $post->body !!}</p>
   </div>
   @endforeach
   </div>
     @else
     <div class="alert alert-danger col h3 text-center" role="alert">
           There arent any job opportunity avaliable at this time check back later &#x1F605;
     </div>
    @endif
    </div>
@endsection