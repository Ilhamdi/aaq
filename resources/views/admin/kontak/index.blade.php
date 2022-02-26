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
            <h1 class="m-0 text-dark">Data Kontak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Kontak</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Kontak</h3>
      
  </div>


  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Subject</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @if (count($data))
        @foreach ($data as $key => $content)
        <tr>
          <td>{{ $content->id }}</td>
          <td>{{ $content->nama }}</td>
          <td>{{ $content->email }}</td>
          <td>{{ $content->phone }}</td>
          <td>{{ $content->subject }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('kontak.show',$content->id) }}">Lihat</a>
              {!! Form::open(['method' => 'DELETE','route' => ['kontak.destroy', $content->id],'style'=>'display:inline']) !!}
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
          <th>Nama</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Subject</th>
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