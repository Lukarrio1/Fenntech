@extends('layouts.cms')
@section('inbox-coun')
@php
echo count($inbox);
@endphp
@endsection
@section('title')
Testimonials({{count($tests) }})
@endsection
@section('nav_dy')
<a href="testimonial/create" class="">Testimonial &#x2795;
</a>
@endsection
@section('co/unter')
<div class="btn btn-outline-dark btn-lg Dy-cms">@if(count($tests)<1)<span class="alert text-danger"> ({{ count($tests) }}) Testimonials @endif
@if(count($tests)==1)<span class="alert text-success"> ({{ count($tests) }}) Testimonial @endif @if(count($tests)>1)<span class="alert text-success"> ({{ count($tests) }}) Testimonials @endif
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
    @foreach( $tests as $test)
    <div class="card bg-dark pb-4">
        <div class="card-body text-center h3 text-white">
                {!! $test->testimonial !!}
        </div>
        <div class="card-footer text-center">
        <a href="testimonial/{{ $test->id }}" class="btn btn-outline-primary btn-lg">View</a>
        </div>
    </div>
    @endforeach
    </div>
</div>

@endsection
