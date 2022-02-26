@extends('adminlte::page')

@section('title', 'Create Client')

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
            <h1 class="m-0 text-dark">Create Client <a href="{{url('client')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/client') }}">Data Client</a></li>
              <li class="breadcrumb-item active">Create Client</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Create Data Client</h3>
      
  </div>


<div class="card-body">
    <form method="post" action="{{ route('client.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
        
        
    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Klien <span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="nama" name="nama" class="form-control col-md-7 col-xs-12" placeholder="Isian Text..." required >
            @if ($errors->has('nama'))
              <span class="help-block">{{ $errors->first('nama') }}</span>
            @endif
        </div>
      </div>

      

      <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="/images/clients/{{ Session::get('fileName') }}" width="550px" />
        </div>



      <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                <label for="logo" class="control-label col-md-3 col-sm-3 col-xs-12">Logo</label>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {{ Form::file('logo', array( 'id' => 'id-input-file-2','class' => 'form-control')) }}
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