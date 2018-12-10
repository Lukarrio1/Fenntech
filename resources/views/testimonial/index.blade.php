
  <div id="carouselControls" class="carousel slide pt-3 carousel-fade text-white text-center " height="120px" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
            <h3><p class="text-center text-white ">Welcome to Fenntech</p></h3>
        </div>
        @if(count($homes)>0)
        @foreach($homes as $home)
        <div class="carousel-item">
            @if(auth::user())
            <div class=" text-white">
           <a href="/testimonial/{{ $home->id }}"  class=" text-center"><span class="text-white h3"> {!! $home->testimonial !!}</span></a>
          </div>
           @else
           <span class="text-white h3"> {!! $home->testimonial !!}</span>
           @endif
        </div>
        @endforeach
        @endif
      </div>
    </div>

