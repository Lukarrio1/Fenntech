@extends('layouts.cms')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
                <div class="text-center  col-lg-12 pb-2"><p class="h3 text-success"> Welcome {{ Auth::user()->name }}</p></div>
            <div class="card pt-2  bg-dark">
                <div class="card-header  text-white text-center bg-dark h3 ">Dashboard</div>

                <div class="card-body bg-dark text-center text-white">
                   <p class="h3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, est.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
