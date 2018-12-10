@extends('layouts.app')
@section('title')
 Home
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
   {{--  carousel goes here  --}}
   @include('Slides.index')
    </div>
    {{--  testimonial goes here  --}}
    <div class="col-lg-12 pb-2 col-md-12 col-sm-12 col-xs-12 bg-success ">
   @include('testimonial.index')
    </div>
  </div>
{{-- what we offer --}}
<div class="row pt-2">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
  <ul  class="list-unstyled">
  <li>hello </li>
  <li>there</li>
  <li>Something</li>
  <li><a href="" class="btn btn-primary btn-lg">to somewhere</a></li>
</ul>

</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
  <ul  class="list-unstyled">
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
    <li><a href=""  class="btn btn-primary btn-lg">to somewhere</a></li>
  </u>

</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
    <ul  class="list-unstyled">
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
    <li><a href="" class="btn btn-primary btn-lg">to somewhere</a></li>
  </ul>

</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
    <ul  class="list-unstyled">
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
    <li><a href="" class="btn btn-primary btn-lg">to somewhere</a></li>
  </ul>

</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
    <ul  class="list-unstyled">
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
    <li><a href="" class="btn btn-primary btn-lg">to somewhere</a></li>
  </ul>

</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
    <ul  class="list-unstyled">
    <li>hello </li>
    <li>there</li>
    <li>Something</li>
    <li><a href=""  class="btn btn-primary btn-lg">to somewhere</a></li>
  </ul>

</div>
</div>
</div>
@endsection
