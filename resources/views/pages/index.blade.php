@extends('layouts.app')
@section('content')
<div class="container ">
<div class="row">
  <div class="col-lg-12 pb-2">
    <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           <img src="{{ url('storage/slide2.jpg') }}" alt="" height="500px" width="100%">
          </div>
          <div class="carousel-item">
              <img src="{{ url('storage/slide3.jpg') }}" alt="" height="500px"  width="100%">
          </div>
          <div class="carousel-item">
              <img src="{{ url('storage/slide1.jpg') }}" alt="" height="500px"  width="100%">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide pt-3 carousel-fade bg-dark text-white text-center" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <h1><p class="text-center text-white bg-dark">Welcome to Fenntech</p></h1>
          </div>
          @if(count($homes)>0)
          @foreach($homes as $home)
          <div class="carousel-item">
              @if(auth::user())
              <div class="bg-dark text-white text-center">
           <a href="/{{ $home->id }}" style="color:white;">{!! $home->testimonial !!}</a></div>
             @else
             {!! $home->testimonial !!}
             @endif
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
    <div class="col-12 text-center">
        <h1>The "what you offer" goes here</h1>
    </div>
</div>
    <div class="row">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">links goes here</div>
</div>





</div>
</div>
@endsection