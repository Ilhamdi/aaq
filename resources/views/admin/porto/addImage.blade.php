@extends('adminlte::page')

@section('title', 'Add Image')

@section('content_header')
<div class="right_col" role="main">
  @include('layouts.alert')
                @if(Session::has('flash_message'))
            <div class="container">      
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
        @endif 
        
                
    </div>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Image Portofolio <a href="{{url('porto')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/porto') }}">Data Portofolio</a></li>
              <li class="breadcrumb-item active">Add Image Portofolio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Gambar Portofolio</h3>
      
  </div>


<div class="card-body">
    <form method="post" action="{{ route('storeImage') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        
      <div class="form-group{{ $errors->has('client') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client">Nama Klien <span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="hidden"  id="portos_id" name="portos_id" class="form-control col-md-7 col-xs-12" value="{{$data->id}}"  >
            <input type="text"  id="client" name="client" class="form-control col-md-7 col-xs-12" value="{{$data->client}}" readonly >
            @if ($errors->has('client'))
              <span class="help-block">{{ $errors->first('client') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('ket') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="span">Event (Acara) 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="ket" name="ket" class="form-control col-md-7 col-xs-12" placeholder="Isian Keterangan Even ..."  >
            @if ($errors->has('ket'))
              <span class="help-block">{{ $errors->first('ket') }}</span>
            @endif
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="/images/porto/{{ Session::get('fileName') }}" width="550px" />
        </div>



      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {{ Form::file('image', array( 'id' => 'id-input-file-2','class' => 'form-control')) }}
                                </div>
        </div>

        


      <div class="box-footer">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

    </form>

</div>
  
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Gambar Portofolio Event {{$data->client}} </h3>
      
  </div>
  
  <div class="card-body">
    <div class="row">
    @if (count($porto))
        @foreach ($porto as $key => $content)
      <div class="col-sm-2">
        <a href="{{asset('/images/porto/'.$content->image) }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
        <img src="{{asset('/images/porto/'.$content->image) }}" class="img-fluid mb-2" alt="white sample"/>
        </a>
      </div>

      @endforeach
        @endif

    </div>

  </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{asset('vendor/ekko-lightbox/ekko-lightbox.css')}}">
@stop

@section('js')

<script src="{{asset('vendor/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<script>
    console.log('Hi!'); 
</script>
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
@stop