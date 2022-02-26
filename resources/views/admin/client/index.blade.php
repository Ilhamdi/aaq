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
            <h1 class="m-0 text-dark">Data Klient</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Klient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Klien</h3>
      <div class="card-tools">
        
        <a class="btn btn-primary" href="{{ route('client.create') }}"> Create Klien</a>
      </div>
  </div>


  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>logo</th>
          <th>nama</th>
          <th>deskripsi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @if (count($data))
        @foreach ($data as $key => $content)
        <tr>
          <td>{{ $content->id }}</td>
          <td><img src="{{asset('/images/clients/'.$content->logo) }}" width="100px"></td>
          <td>{{ $content->nama }}</td>
          <td>{{ $content->desk }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('client.edit',$content->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['client.destroy', $content->id],'style'=>'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
        @endif
      </tbody>
      <tfoot>
        <tr>
        <th>No.</th>
          <th>logo</th>
          <th>nama</th>
          <th>deskripsi</th>
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