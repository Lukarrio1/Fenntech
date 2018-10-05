@extends('layouts.app')
@section('title')
 Home
@endsection
@section('content')
<div class="container-fluid ">
<div class="row">
  <div class="col-lg-12 pb-2 col-md-12 col-sm-12 col-xs-12 ">
   {{--  carousel goes here  --}}
   @include('Slides.index')
    </div>
   @include('testimonial.index') 
  </div>
</div>

    <div class="row ">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
  <ul> 
  <li>hello </li>
  <li>there</li>
  <li>Something</li>
</u>
<a href="">to somewhere</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center"><ul> 
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
  </u>
  <a href="">to somewhere</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center"><ul> 
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
  </u>
  <a href="">to somewhere</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center"><ul> 
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
  </u>
  <a href="">to somewhere</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center"><ul> 
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
  </u>
  <a href="">to somewhere</a>s
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center"><ul> 
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
  </u>
  <a href="">to somewhere</a>
</div>
</div>
</div>
@endsection