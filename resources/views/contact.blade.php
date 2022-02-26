@extends('tampilan')

@section('content')
<section id="page-title" >



<div class="container clearfix">
<h1>Kontak</h1>
<span>Hubungi Kami</span>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Kontak</li>
</ol>
</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container">
<div class="row gutter-40 col-mb-80">

<div class="postcontent col-lg-9">

   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
                <i class="icon-gift"></i><strong>Pesan Berhasil</strong> , {{ $message }}
            </div>
    @endif    
                
   
<h3>Send us an Email</h3>
<div class="form">
<div class="form-result"></div>
    <form class="mb-0" id="contactform" name="contactform" data-parsley-validate action="{{ route('kontak.store') }}" method="post" enctype="multipart/form-data">
    
    
        <!-- <div class="form-process">
            <div class="css3-spinner">
                <div class="css3-spinner-scaler"></div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="template-contactform-name">Name <small>*</small></label>
                <input type="text" id="name" name="nama" value="" class="sm-form-control " />
            </div>
            <div class="col-md-4 form-group">
                <label for="template-contactform-email">Email <small>*</small></label>
                <input type="email" id="template-contactform-email" name="email" value="" class=" email sm-form-control" />
            </div>
            <div class="col-md-4 form-group">
                <label for="template-contactform-phone">Phone</label>
                <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
            </div>
                <div class="w-100"></div>
                <div class="col-md-8 form-group">
                    <label for="template-contactform-subject">Subject <small>*</small></label>
                    <input type="text" id="subject" name="subject" value="" class="sm-form-control" />
                </div>

                <div class="w-100"></div>
                <div class="col-12 form-group">
                    <label for="template-contactform-message">Message <small>*</small></label>
                    <textarea class=" sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                </div>
                
                <div class="col-12 form-group">
                    <!-- <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button class="button button-3d m-0" type="submit" id="submit" name="submit" value="submit">Send Message</button> -->

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </div>

    </form>
    </div>
</div>

<div class="sidebar col-lg-3">
<address>
<strong>Alamat Kantor:</strong><br>
Jln. Gaharu Gg. Amat Lama No.16/29<br>
Medan - Indonesia<br>
</address>
<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="https://themes.semicolonweb.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dab3b4bcb59ab9bbb4acbba9f4b9b5b7">cs@aaqmultimediapro.id</a>


<div class="widget border-0 pt-0">
<a href="#" class="social-icon si-small si-dark si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>
<a href="#" class="social-icon si-small si-dark si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>
<a href="#" class="social-icon si-small si-dark si-dribbble">
<i class="icon-dribbble"></i>
<i class="icon-dribbble"></i>
</a>
<a href="#" class="social-icon si-small si-dark si-forrst">
<i class="icon-forrst"></i>
<i class="icon-forrst"></i>
</a>
<a href="#" class="social-icon si-small si-dark si-pinterest">
<i class="icon-pinterest"></i>
<i class="icon-pinterest"></i>
</a>
<a href="#" class="social-icon si-small si-dark si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection