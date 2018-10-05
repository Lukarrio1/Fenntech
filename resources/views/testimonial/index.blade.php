<div class="container-fluid">
  <div id="carouselControls" class="carousel slide pt-3 carousel-fade  text-dark text-center" height="120px" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
            <h1><p class="text-center text-dark pt-1">Welcome to Fenntech</p></h1>
        </div>
        @if(count($homes)>0)
        @foreach($homes as $home)
        <div class="carousel-item">
            @if(auth::user())
            <div class=" text-dark">
           <a href="/testimonial/{{ $home->id }}" style="color:black;" class=" text-center">{!! $home->testimonial !!}</a>
          </div>
           @else
           {!! $home->testimonial !!}
           @endif
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>