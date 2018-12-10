@extends('layouts.app')
@section('title')
Portfolio
@endsection
@section('content')
<div class="card text-white col-12 bg-success rounded pt-1">
        <div class=" card-body">
            <p class="h1">Our Portfolio</p>
        </div>
    </div>
<div class="row pt-2">
    @if(count($albums)>0)
    @foreach($albums as $album)
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
    <img class="img-size" src="/storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}" >
    <p class="h4">{{ $album->name }}</p>
    <a href="/portfolio/{{ $album->id }}" class="btn btn-lg btn-primary">Open Portfolio</a>
    </div>
    @endforeach
    @else
        <div class="col text-center  pt-2">
    <div class="alert alert-danger text-center h3" role="alert">
            Portfolio Empty &#x1F605;
           </div>
        </div>

    @endif
</div>
@endsection
