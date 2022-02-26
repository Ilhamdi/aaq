@extends('tampilan')

@section('content')
<section id="page-title" >
<div class="container clearfix">
<h1>@lang('general.about_us')</h1>
<span>@lang('general.span_about')</span>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Pages</a></li>
<li class="breadcrumb-item active" aria-current="page">@lang('general.about_us')</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">
    <div class="row col-mb-80 mb-0">
<div class="col-12">
<div class="heading-block center border-bottom-0">
<h2>Interactive Office Environment</h2>
<span>We value Work Ethics &amp; Environment as it helps in creating a Creative Thinktank</span>
</div>
<div class="fslider" data-pagi="false" data-animation="fade">
<div class="flexslider">
<div class="slider-wrap">
@if (count($data))
    @foreach ($data as $key => $content)
    <div class="slide"><a href="#"><img src="{{asset('/images/display/'.$content->image) }}" alt="{{$content->judul}}" ></a></div>
    @endforeach
@endif
<!-- <div class="slide"><a href="#"><img src="images/about/2.jpg" alt="About Image" height="100"></a></div>
<div class="slide"><a href="#"><img src="images/about/3.jpg" alt="About Image" height="100"></a></div>
<div class="slide"><a href="#"><img src="images/about/4.jpg" alt="About Image" height="100"></a></div> -->
</div>
</div>
</div>
</div>

<div class="promo promo-light p-4 p-md-5 mb-5">
    <div class="row align-items-center">
        <div class="col-12 col-lg">
            <h3>@lang('general.promo')</h3>
<!-- <span> No Ads, No Gimmicks and No SPAM. Just Real Content.</span> -->
        </div>
        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
            <a href="#" class="button button-large button-circle button-black m-0">@lang('general.promo_hire')</a>
        </div>
    </div>
</div>


</div>

    </div>
</div>
</section>

@endsection