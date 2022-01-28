<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>AAQ | Multimedia Production</title>
</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
<div id="header-wrap">
<div class="container">
<div class="header-row">

<div id="logo">
<a href="index-2.html" class="standard-logo" data-dark-logo="images/logo_aaq.png"><img src="images/logo_aaq.png" alt="Canvas Logo"></a>
<a href="index-2.html" class="retina-logo" data-dark-logo="images/logo_aaq.png"><img src="images/logo_aaq.png" alt="Canvas Logo"></a>
</div>
<div class="header-misc">

<div id="top-search" class="header-misc-icon">
<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
</div>


</div>
<div id="primary-menu-trigger">
<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
</div>

<nav class="primary-menu">
    <ul class="menu-container">
        <li class="menu-item " >
            <a class="menu-link " href="{{url('/')}}"><div>@lang('general.menu.home')</div></a>
        </li>
        <li class="menu-item">
            <a class="menu-link " href="{{url('/about')}}"><div>@lang('general.menu.about')</div></a>
        </li>
        

        <li class="menu-item">
            <a class="menu-link" href="#"><div>@lang('general.menu.service')</div></a>
            <ul class="sub-menu-container">
            <li class="menu-item">
            <a class="menu-link" href="services.html"><div>MULTIMEDIA Services</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="#"><div>BROADCASTING Solutions</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="#"><div>EVENT Services</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="#"><div>INTERNET Solutions</div></a>
            <ul class="sub-menu-container">
            <li class="menu-item">
            <a class="menu-link" href="index-corporate.html"><div>Product & Layanan</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="index-corporate-2.html"><div>TicNet</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="index-corporate-3.html"><div>Kamera CCTV</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="index-corporate-4.html"><div>Jaringan IPLC</div></a>
            </li>
            <li class="menu-item">
            <a class="menu-link" href="index-corporate-4.html"><div>Layanan Lainnya</div></a>
            </li>
            </ul>
        </li>


        </ul>
        </li>





        <li class="menu-item mega-menu">
            <a class="menu-link" href="portfolio.html"><div>@lang('general.menu.portofolio')</div></a>
        </li>
        
        <li class="menu-item mega-menu">
            <a class="menu-link" href="contac.html"><div>@lang('general.menu.contact')</div></a>
        </li>
        <li class="menu-item dropdown">
            <a class="menu-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >{{strtoupper(Lang::locale())}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item flag-icon-id" href="lang/id">ID</a></li>
                <li><a class="dropdown-item flag-icon-en" href="lang/en">EN</a></li>
            </ul>
                </li>

            </ul>
</nav>
<form class="top-search-form" action="https://themes.semicolonweb.com/html/canvas/search.html" method="get">
<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
</form>
</div>
 </div>
</div>
<div class="header-wrap-clone"></div>
</header>


<!-- Content Wrapper. Contains page content -->
@yield('content')


<footer id="footer" class="dark">
<div class="container">

<div class="footer-widgets-wrap">
<div class="row col-mb-50">
<div class="col-lg-8">
<div class="row col-mb-50">
<div class="col-md-8">
<div class="widget clearfix">
<img src="images/logo_aaq.png" alt="Image" class="footer-logo">
<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
<address>
<strong>Alamat:</strong><br>
Jln. Gaharu Gg. Amat Lama No.16/29<br>
Medan - Indonesia<br>
</address>
<abbr title="Phone Number"><strong>Phone:</strong></abbr> (061) 8547 xxxx<br>
<abbr title="Fax"><strong>Fax:</strong></abbr> (061) 8547 xxxx<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="#" class="__cf_email__" data-cfemail="20494e464f6043414e5641530e434f4d">cs@aaqmultimediapro.id</a>
</div>
</div>
</div>


</div>
</div>

<div class="col-lg-4">
<div class="row col-mb-50">
<div class="col-md-4 col-lg-12">
<div class="widget clearfix" style="margin-bottom: -20px;">

</div>
</div>

<div class="col-md-5 col-lg-12">
<div class="widget subscribe-widget clearfix">
<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
<div class="widget-subscribe-form-result"></div>
<form id="widget-subscribe-form" action="https://themes.semicolonweb.com/html/canvas/include/subscribe.php" method="post" class="mb-0">
<div class="input-group mx-auto">
<div class="input-group-text"><i class="icon-email2"></i></div>
<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
 <button class="btn btn-success" type="submit">Subscribe</button>
</div>
</form>
</div>
</div>
<div class="col-md-3 col-lg-12">
<div class="widget clearfix" style="margin-bottom: -20px;">
<div class="row">
<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
<i class="icon-instagram"></i>
<i class="icon-instagram"></i>
</a>
<a href="#"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Instagram</small></a>
</div>
<div class="col-6 col-md-12 col-lg-6 clearfix">
<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
<i class="icon-rss"></i>
<i class="icon-rss"></i>
</a>
<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="copyrights">
<div class="container">
<div class="row col-mb-30">
<div class="col-md-6 text-center text-md-start">
Copyrights &copy; 2022 All Rights Reserved by Canvas Inc.<br>

</div>
<div class="col-md-6 text-center text-md-end">
<div class="d-flex justify-content-center justify-content-md-end">
<a href="#" class="social-icon si-small si-borderless si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-pinterest">
<i class="icon-pinterest"></i>
<i class="icon-pinterest"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-vimeo">
<i class="icon-vimeo"></i>
<i class="icon-vimeo"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-github">
<i class="icon-github"></i>
<i class="icon-github"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-yahoo">
<i class="icon-yahoo"></i>
<i class="icon-yahoo"></i>
</a>
<a href="#" class="social-icon si-small si-borderless si-linkedin">
<i class="icon-linkedin"></i>
<i class="icon-linkedin"></i>
</a>
</div>
<div class="clear"></div>
<i class="icon-envelope2"></i> <a href="https://themes.semicolonweb.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f39a9d959cb390929d859280dd909c9e">cs@aaqmultimediapro.id</a> <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
</div>
</div>
</div>
</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="{{asset('js/plugins.min.js')}}"></script>

<script src="{{asset('js/functions.js')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccbd4201d156bf4","token":"0627f0b8b73941069bc19139e63db853","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 04:23:32 GMT -->
</html>