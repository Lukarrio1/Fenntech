<div id="carouselControls" class="carousel slide " data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ url('storage/slide2.jpg') }}" alt="" class="img-size">
      </div>    
       @foreach($slides as $item)
      <div class="carousel-item">
          <img src="/storage/Slides/{{ $item->slides }}" alt=""  class="img-size">
      </div> 
       @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>