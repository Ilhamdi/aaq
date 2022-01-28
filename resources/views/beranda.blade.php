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
                            <span class="before-heading">Profesional Crew .</span>
                            <h4>Multimedia</h4>
                        </div>
                            <p>Kami merupakan salah satu vendor yang handal dan dipercaya oleh BUMN, Instansi Pemerintahan, dan perusahaan swasta lainnya.</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Multi Platform </span>
                            <h4>BROADCASTING</h4>
                        </div>
                        <p>Event live streaming dapat disaksikan melalui berbagai platform seperti Youtube, Zoom, Google Meeting, Instagram dan lain sebagainya.</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Kecapatan Layanan</span>
                            <h4>INTERNET Solutions</h4>
                        </div>
                        <p>Penyedia Jasa layanan Dedicated fiber Optic menawarkan berbagai layanan telekomunikasi dan multimedia untuk memenuhi permintaan bisnis dan konsumen dengan harga yang kompetitif</p>
                    </div>
                    <div class="col-lg-3">
                        <i class="i-plain color i-large icon-line2-user inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                            <span class="before-heading">Alat Terbaik</span>
                            <h4>EVENT Services</h4>
                        </div>
                        <p>Pengadaan peralatan alat-alat dalam berbagai acara seperti panggung pentas, pernikahan, acara keluarga,  dan kebutuhan lainnya dengan peralatan lengkap dan berkualitas sesuai kebutuhan anda.</p>
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