@extends('tampilan')

@section('content')

<section id="page-title" >
  <div class="container clearfix">
    <h1>Portfolio</h1>
      <span>Showcase of Our Awesome Works</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><b>Portfolio</b></li>
        </ol>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div class="grid-filter-wrap">
        <ul class="grid-filter" data-container="#portfolio">
          <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
          <li><a href="#" data-filter=".Multimedia-Services">Multimedia Services</a></li>
          <li><a href="#" data-filter=".Broadcasting-Solutions">Broadcasting Solutions</a></li>
          <li><a href="#" data-filter=".Event-Services">Event Services</a></li>
          <li><a href="#" data-filter=".Internet-Solutions">Internet Solutions</a></li>
          </ul>
          <div class="grid-shuffle rounded" data-container="#portfolio">
          <i class="icon-random"></i>
          </div>

      </div>

      <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">
      @if (count($data))
        @foreach ($data as $key => $content)  
        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-icons {{ $content->services }}">
          <div class="grid-inner">
            <div class="portfolio-image">
              <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                <div class="flexslider">
                  <div class="slider-wrap">
                  @foreach ($content->portoList as $key => $row)
                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('/images/porto/'.$row->image) }}" alt="{{ $content->client }}"></a></div>
                    <!-- <div class="slide"><a href="portfolio-single-gallery.html"><img src="{{asset('/images/porto/20220215144255.jpg') }}" alt="Morning Dew"></a></div> -->
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="bg-overlay" data-lightbox="gallery">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                
                  <a href="{{asset('/images/porto/'.$content->image) }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                  
                  @foreach ($content->portoList as $key => $row)
                  <a href="{{asset('/images/porto/'.$row->image) }}" class="d-none" data-lightbox="gallery-item"></a>
                  @endforeach
                  
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
              </div>
            </div>
            <div class="portfolio-desc">
              <h3><a href="portfolio-single-gallery.html">{{ $content->client }}</a></h3>
              <span>{{ $content->event}}</span>
            </div>
          </div>
        </article>

        @endforeach
        @endif



    </div>
  </div>



@endsection