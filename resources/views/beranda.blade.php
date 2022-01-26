@extends('tampilan')

@section('content')

<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">
    <div class="swiper-container swiper-parent">
    <div class="swiper-wrapper">

    @foreach($slider as $row)
    <div class="swiper-slide dark">
    <div class="container">
    <div class="slider-caption slider-caption-center">
    <h2 data-animate="fadeInUp">{{$row->judul}}</h2>
    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{{$row->span}}</p>
    </div>
    </div>
    <div class="swiper-slide-bg" style="background-image: url('images/display/{{$row->image}}');"></div>
    </div>
    @endforeach

    </div>
    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>
    <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="heading-block">
                        <h1>{{$heading_block->judul}} </h1>
                    </div>
                    <p class="lead">{{$heading_block->span}}</p>
                </div>
                <div class="col-lg-7 align-self-end">
                    <div class="position-relative overflow-hidden">
                        <img src="images/display/{{$heading_block->image}}" data-animate="fadeInUp" data-delay="100" alt="Chrome">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="section my-0">
            <div class="container">
                <div class="row mt-4 col-mb-50">
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Scalable on Devices.</span>
                            <h4>Multimedia</h4>
                        </div>
                            <p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Smartly Coded &amp; Maintained.</span>
                            <h4>Live Streaming</h4>
                        </div>
                        <p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation. Diversification shifting landscape advocate pathway to a better life rights international. Assessment.</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Flexible &amp; Customizable.</span>
                            <h4>Event Organizer</h4>
                        </div>
                        <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-user inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Jaringan.</span>
                            <h4>Jaringan</h4>
                        </div>
                        <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
                    </div>
            </div>
        </div>
    </div>

<div class="container clearfix">
<div class="heading-block topmargin-lg center">
<h2>Kenapa kami?</h2>
<span class="mx-auto">Yuk gunakan Jasa Live Streaming Sekarang Juga dan Pancarluaskan Event Anda Keseluruh Dunia. Tertarik?</span>
</div>
<div class="row col-mb-50 mb-4">
<div class="col-lg-4 col-md-6">
<div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">
<div class="fbox-icon">
<a href="#"><i class="icon-line-heart"></i></a>
</div>
<div class="fbox-content">
<h3>KECEPATAN LAYANAN</h3>
<p>Kualitas live streaming tanpa buffering. Kami dapat melayani pesanan jasa live streaming hingga 1 hari sebelum sebuah event berlangsung (standard maksimal)​</p>
</div>
</div>
<div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="200">
<div class="fbox-icon">
<a href="#"><i class="icon-line-paper"></i></a>
</div>
<div class="fbox-content">
<h3>Professional Crew & Equipment</h3>
<p>Kami selalu melayani dengan kwalitas terbaik, dan didukung dengan SDM berpengalaman dalam menyelenggarakan live streaming</p>
</div>
</div>

<div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="400">


</div>
</div>
<div class="col-lg-4 d-md-none d-lg-block text-center">
<img src="images/aaq/live.png" alt="iphone 2">
</div>
<div class="col-lg-4 col-md-6">
<div class="feature-box" data-animate="fadeIn">
<div class="fbox-icon">
<a href="#"><i class="icon-line-power"></i></a>
</div>
<div class="fbox-content">
<h3>Creative Thinking</h3>
<p>Kreativitas adalah nilai pertama dan utama event organizer (EO) kami dalam mempersiapkan dan menghasilkan kegiatan yang istimewa serta menarik</p>
</div>
</div>
<div class="feature-box mt-5" data-animate="fadeIn" data-delay="200">
<div class="fbox-icon">
<a href="#"><i class="icon-line-check"></i></a>
</div>
<div class="fbox-content">
<h3>Alat Terbaik</h3>
<p>Dari Kamera hingga Drone. Kami menggunakan kualitas terbaik sehingga memastikan Livestream dengan kualitas terbaik.</p>
</div>
</div>



</div>
</div>
</div>
<div class="row clearfix align-items-stretch">
    <div class="col-lg-6 center col-padding" style="background: url('images/display/{{$last_event1->image}}') center center no-repeat; background-size: cover;">
    </div>
    <div class="col-lg-6 center col-padding" style="background-color: #F5F5F5;">
        <div class="heading-block border-bottom-0">
            <span class="before-heading color">Last Event</span>
            <h3>{{$last_event->judul}}</h3>
        </div>
<div class="center bottommargin">
<a class="d-block position-relative" href="{{$last_event->link}}" data-lightbox="iframe">
<img src="images/display/{{$last_event->image}}" alt="Video">
<div class="bg-overlay">
<div class="bg-overlay-content dark">
<span class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07" data-hover-parent=".row"><i class="icon-line-play"></i></span>
</div>
</div>
</a>
</div>
<p class="lead mb-0">{{$last_event->span}}</p>
</div>
</div>



<div class="section topmargin mb-0 border-bottom-0">
    <div class="container clearfix">
        <div class="heading-block center m-0">
            <h3>Our Latest Works</h3>
        </div>
    </div>
</div>
<div id="portfolio" class="portfolio row g-0 portfolio-reveal grid-container">
    <article class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
        <div class="grid-inner">
            <div class="portfolio-image">
                <a href="portfolio-single.html">
                <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                </a>
                <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                        <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                        <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                </div>
            </div>
            <div class="portfolio-desc">
                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
            </div>
        </div>
    </article>

<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-illustrations">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single.html">
<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
</a>
<div class="bg-overlay">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
<span><a href="#">Illustrations</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
<div class="grid-inner">
<div class="portfolio-image">
<a href="#">
<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
</a>
<div class="bg-overlay">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="iframe"><i class="icon-line-play"></i></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single.html">
<img src="images/portfolio/4/4.jpg" alt="Open Imagination">
</a>
<div class="bg-overlay" data-lightbox="gallery">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
<a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-uielements pf-media">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single.html">
<img src="images/portfolio/4/5.jpg" alt="Console Activity">
</a>
<div class="bg-overlay">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single.html">Console Activity</a></h3>
<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single.html">
<img src="images/portfolio/4/6.jpg" alt="Open Imagination">
</a>
<div class="bg-overlay" data-lightbox="gallery">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
<a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
<a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
<a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
<a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-uielements pf-icons">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single-video.html">
<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
</a>
<div class="bg-overlay">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="iframe"><i class="icon-line-play"></i></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
</div>
</div>
</article>
<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
<div class="grid-inner">
<div class="portfolio-image">
<a href="portfolio-single.html">
<img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
</a>
<div class="bg-overlay">
<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
<a href="images/portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
<a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
</div>
<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
</div>
</div>
<div class="portfolio-desc">
<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
<span><a href="#">Graphics</a></span>
</div>
</div>
</article>
</div>
<a href="portfolio.html" class="button button-full button-dark center text-end bottommargin-lg">
<div class="container clearfix">
More than 100+ predefined Portfolio . <strong>See More</strong> <i class="icon-caret-right" style="top:4px;"></i>
</div>
</a>


<div class="section">
<div class="container clearfix">
<div class="heading-block topmargin-sm center">
<h3>Meet Our Team</h3>
</div>
<div class="row">
<div class="col-lg-3 col-md-6 bottommargin">
<div class="team">
<div class="team-image">
<img src="images/team/3.jpg" alt="John Doe">
</div>
<div class="team-desc team-desc-bg">
<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 bottommargin">
<div class="team">
<div class="team-image">
<img src="images/team/2.jpg" alt="Josh Clark">
</div>
<div class="team-desc team-desc-bg">
<div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 bottommargin">
<div class="team">
<div class="team-image">
<img src="images/team/8.jpg" alt="Mary Jane">
</div>
<div class="team-desc team-desc-bg">
<div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 bottommargin">
<div class="team">
<div class="team-image">
<img src="images/team/4.jpg" alt="Nix Maxwell">
</div>
<div class="team-desc team-desc-bg">
<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container clearfix">
<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
<div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></div>
<div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></div>
</div>
</div>
</div>
</section>

@endsection