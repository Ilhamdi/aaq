@extends('adminlte::page')

@section('title',$title)

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
            <h1 class="m-0 text-dark">Data Portofolio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Portofolio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Portfolio</h3>
      <div class="card-tools">
        
        <a class="btn btn-primary" href="{{ route('porto.create') }}"> Create Portofolio</a>
      </div>
  </div>


  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>image</th>
          <th>Client</th>
          <th>Event</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @if (count($data))
        @foreach ($data as $key => $content)
        <tr>
          <td>{{ $content->id }}</td>
          <td><img src="{{asset('/images/porto/'.$content->image) }}" width="100px"></td>
          <td>{{ $content->client }}</td>
          <td>{{ $content->event }}</td>
          <td>
            <a class="btn btn-primary btn-sm" href="{{ route('porto.edit',$content->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['porto.destroy', $content->id],'style'=>'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
              {!! Form::close() !!}
              <a class="btn btn-primary btn-sm" href="{{ route('addImage',$content->id) }}">Add Image</a>
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      <tfoot>
        <tr>
        <th>No.</th>
          <th>image</th>
          <th>Client</th>
          <th>Event</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
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