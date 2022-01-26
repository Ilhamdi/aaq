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
    <form method="post" action="{{ route('porto.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        
      <div class="form-group{{ $errors->has('client') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client">Nama Klien <span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="client" name="client" class="form-control col-md-7 col-xs-12" placeholder="Isian Nama Klien..." required >
            @if ($errors->has('client'))
              <span class="help-block">{{ $errors->first('client') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('event') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="span">Event (Acara) 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="event" name="event" class="form-control col-md-7 col-xs-12" placeholder="Isian Keterangan Even ..."  >
            @if ($errors->has('event'))
              <span class="help-block">{{ $errors->first('event') }}</span>
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