@extends('layouts.cms')
@section('title')
All Carousel Image
@endsection
@section('nav_dy')
<a href="{{ url('Slides/create') }}" class="">
&#x2795;
Carousel
</a>
@endsection
@section('content')
<div class="row justify-content-center">
        @foreach($slides as $item)
         <div class="col-lg-10 pb-3">
             <div class="card auth_user_color ">
                 <div class="card-body text-white text-center">
                <img src="/storage/slides/{{ $item->slides }}" alt="{!! $item->slides !!}" height="500px" width="90%" >
                 <p class="h3">{!! $item->captions !!}</p>
                 </div>
                 <div class="card-footer text-center">
             <a href="/Slides/{{ $item->id }}" class="btn  btn-outline-primary text-primary btn-lg" >View</a>
                 </div>
             </div>
         </div>
         @endforeach
    </div>
@endsection