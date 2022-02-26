@extends('tampilan')

@section('content')

<section id="page-title" >
    <div class="container clearfix">
        <h1>Live Event</h1>
        <span>Jasa Live Event Dokumentasi Profesional Terbaik!</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active" aria-current="page"><b>Live Event</b></li>
        </ol>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        
        <div class="container clearfix">
            <div class="row align-items-center gutter-40 col-mb-50">
            <div class="col-md-8">
            <div style="position: relative;" data-height-xl="535" data-height-lg="442" data-height-md="338" data-height-sm="316" data-height-xs="201">
<img data-animate="fadeInLeft" src="images/aaq/device1.png" alt="Mac" style="position: absolute; top: 0; left: 0;">
<img data-animate="fadeInRight" data-delay="300" src="images/aaq/device2.png" alt="iPad" style="position: absolute; top: 0; left: 0;">
<img data-animate="fadeInUp" data-delay="600" src="images/aaq/device3.png" alt="iPhone" style="position: absolute; top: 0; left: 0;">
</div>
            </div>
            <div class="col-md-4">
            <div class="heading-block">
            <h2>Kami Membantu Mendokumentasikan Event Anda.</h2>
            <span>Menawarkan Solusi untuk menyiarkan event Live dengan kualitas Full HD.</span>
            </div>
            <p>AAQ Multimedia Production membantu dalam mendokumentasikan Event Anda melalui sebuah Video yang terkonsep dengan baik dari tahap persiapan hingga penutupan Event tersebut.</p>
            <p>Berbagai Event perusahaan dan organisasi dengan berbagai acara dan tujuan seperti diantara lain :</p>
<ul class="iconlist iconlist-large iconlist-color">
<li><i class="icon-ok-sign"></i> Event Konser Musik</li>
<li><i class="icon-ok-sign"></i> Event Employee Gathering</li>
<li><i class="icon-ok-sign"></i> Event Outing Perusahaan</li>
<li><i class="icon-ok-sign"></i> Event Olah raga (Rally, Futsal)</li>
<li><i class="icon-ok-sign"></i> Event Outbound</li>
<li><i class="icon-ok-sign"></i> Event Press Conference</li>
<li><i class="icon-ok-sign"></i> Event Ulang Tahun Perusahaan</li>
</ul>
            </div>
            </div>

    <div class="divider divider-center"><i class="icon-circle"></i></div>

        <h4>Related Projects:</h4>
        <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

            <div class="oc-item">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                    <a href="#">
                        <img src="images/aaq/device1.png" alt="Open Imagination">
                    </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="images/aaq/device1.png" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                <div class="portfolio-desc">
                <h3>Open Imagination</h3>
                <span>Media, Icons</span>
                </div>
                </div>
            </div>

            <div class="oc-item">
                <div class="portfolio-item">
                <div class="portfolio-image">
                <a href="portfolio-single-video.html">
                <img src="images/aaq/cam2.jpg" alt="Backpack Contents">
                </a>
                <div class="bg-overlay">
                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                
                </div>
                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                </div>
                </div>
                <div class="portfolio-desc">
                <h3>Backpack Contents</h3>
                <span>UI Elements,Icons</span>
                </div>
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
</section>

@endsection