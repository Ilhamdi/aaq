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
            <h1 class="m-0 text-dark">Data Konten</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Konten</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@stop

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Kontent</h3>
      <div class="card-tools">
        
        <a class="btn btn-primary" href="{{ route('content.create') }}"> Create content</a>
      </div>
  </div>


  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>image</th>
          <th>judul</th>
          <th>span</th>
          <th>Lang</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @if (count($data))
        @foreach ($data as $key => $content)
        <tr>
          <td>{{ $content->urut }}</td>
          <td><img src="{{asset('/images/display/'.$content->image) }}" width="100px"></td>
          <td>{{ $content->judul }}</td>
          <td>{{ $content->span }}</td>
          <td>{{ $content->lang }}</td>
          <td>
            <a class="btn btn-primary" href="{{ route('content.edit',$content->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['content.destroy', $content->id],'style'=>'display:inline']) !!}
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
          <th>image</th>
          <th>judul</th>
          <th>span</th>
          <th>Lang</th>
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