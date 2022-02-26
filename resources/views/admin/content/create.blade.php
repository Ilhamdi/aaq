@extends('adminlte::page')

@section('title', 'Create Kontent')

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
            <h1 class="m-0 text-dark">Create Konten <a href="{{url('content')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/content') }}">Data Konten</a></li>
              <li class="breadcrumb-item active">Create Konten</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Create Data Konten</h3>
      
  </div>


<div class="card-body">
    <form method="post" action="{{ route('content.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        
    <div class="form-group{{ $errors->has('lang') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lang">Bahasa 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select class="form-control" id="lang" name="lang">
                                    
                                      <option value="ID">Indonesia</option>
                                      <option value="EN">English</option>     
                                    </select>
                                    @if ($errors->has('lang'))
                                    <span class="help-block">{{ $errors->first('lang') }}</span>
                                    @endif
                                </div>
                        </div>
    
    <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Isian Teks <span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="judul" name="judul" class="form-control col-md-7 col-xs-12" placeholder="Isian Text..." required >
            @if ($errors->has('judul'))
              <span class="help-block">{{ $errors->first('judul') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('span') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="span">Span 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="span" name="span" class="form-control col-md-7 col-xs-12" placeholder="Isian Keterangan ..."  >
            @if ($errors->has('span'))
              <span class="help-block">{{ $errors->first('span') }}</span>
            @endif
        </div>
      </div>
      <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Icon 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="icon" name="icon" class="form-control col-md-7 col-xs-12" placeholder="Isian Icon ..."  >
            @if ($errors->has('icon'))
              <span class="help-block">{{ $errors->first('icon') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="icon">Deskripsi 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            
            <textarea id="deskripsi" name="deskripsi" class="form-control col-md-7 col-xs-12" rows="3" placeholder="Isian Deskripsi ..."></textarea>
            @if ($errors->has('deskripsi'))
              <span class="help-block">{{ $errors->first('deskripsi') }}</span>
            @endif
        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="/images/display/{{ Session::get('fileName') }}" width="550px" />
        </div>



      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {{ Form::file('image', array( 'id' => 'id-input-file-2','class' => 'form-control')) }}
                                </div>
        </div>

        <div class="form-group{{ $errors->has('urut') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urut">Urutan 
                            </label>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <input type="text" value="{{ Request::old('urut') ?: '' }}" id="urut" name="urut" class="form-control col-md-7 col-xs-12" >
                                @if ($errors->has('urut'))
                                <span class="help-block">{{ $errors->first('urut') }}</span>
                                @endif
                            </div>
            </div>


        <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Section 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select class="form-control" id="section" name="section">
                                    
                                      <option value="slider">slider</option>
                                      <option value="heading-block">heading-block</option> 
                                      <option value="layanan">layanan</option>   
                                      <option value="judul_about">judul_about</option> 
                                      <option value="galeri_about">galeri_about</option> 
                                    </select>
                                    @if ($errors->has('section'))
                                    <span class="help-block">{{ $errors->first('section') }}</span>
                                    @endif
                                </div>
          </div>

          <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">Link 
                            </label>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" value="{{ Request::old('link') ?: '' }}" id="link" name="link" class="form-control col-md-7 col-xs-12" >
                                @if ($errors->has('link'))
                                <span class="help-block">{{ $errors->first('link') }}</span>
                                @endif
                            </div>
            </div>

            <div class="form-group{{ $errors->has('menu') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Menu 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select class="form-control" id="menu" name="menu">
                                    
                                      <option value="beranda">beranda</option>
                                      <option value="tentang">tentang</option> 
                                      <option value="layanan">layanan</option> 
                                      <option value="portofolio">portofolio</option>  
                                      <option value="kontak">kontak</option> 
                                    </select>
                                    @if ($errors->has('menu'))
                                    <span class="help-block">{{ $errors->first('menu') }}</span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Status 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select class="form-control" id="status" name="status">
                                    
                                      <option value="on">ON</option>
                                      <option value="off">OFF</option>     
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="help-block">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                        </div>

      <div class="box-footer">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

    </form>

</div>
  
</div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop