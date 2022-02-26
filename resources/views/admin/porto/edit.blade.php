@extends('adminlte::page')

@section('title', 'Edit Portofolio')

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
            <h1 class="m-0 text-dark">Edit Portofolio <a href="{{url('porto')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/porto') }}">Data Portofolio</a></li>
              <li class="breadcrumb-item active">Edit Portofolio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Data Portofolio</h3>
      
  </div>


<div class="card-body">
    
    <form method="post" action="{{ route('porto.update', $porto) }}" data-parsley-validate enctype="multipart/form-data">
                    {{ csrf_field() }}
        
      <div class="form-group{{ $errors->has('client') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="client">Nama Klien <span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="client" name="client" class="form-control col-md-7 col-xs-12" value="{{$porto->client}}" >
            @if ($errors->has('client'))
              <span class="help-block">{{ $errors->first('client') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('event') ? ' has-error' : '' }}">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="span">Event (Acara) 
        </label>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text"  id="event" name="event" class="form-control col-md-7 col-xs-12" value="{{$porto->event}}">
            @if ($errors->has('event'))
              <span class="help-block">{{ $errors->first('event') }}</span>
            @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('services') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Services 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <select class="form-control" id="services" name="services">
                                      <option value="{{$porto->services}}">{{$porto->services}}</option>
                                      <option value="Multimedia-Services">Multimedia Services</option>
                                      <option value="Broadcasting-Solutions">Broadcasting Solutions</option> 
                                      <option value="Event-Services">Event Services</option>   
                                      <option value="Internet-Solutions">Internet Solutions</option>  
                                    </select>
                                    @if ($errors->has('services'))
                                    <span class="help-block">{{ $errors->first('services') }}</span>
                                    @endif
                                </div>
          </div>

      <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="{{asset('/images/porto/'.$porto->image) }}" width="550px" />
        </div>



      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {{ Form::file('image', array( 'id' => 'id-input-file-2','class' => 'form-control')) }}
                                </div>
        </div>

        


      <div class="box-footer">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <input name="_method" type="hidden" value="PUT">
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