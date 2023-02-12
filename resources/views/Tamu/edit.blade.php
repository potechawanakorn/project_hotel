@extends('layouts.master')
@section('judul','Edit Data tamu')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data tamu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Data tamu</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="/tamu">
            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NAMA</label>
              <input type="text" value="{{$mhs->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor Kamar</label>
              <input type="text" value="{{$tamu->nomor}}" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tanggal</label>
                <input type="text" value="{{$tamu->tanggal}}" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
  

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kamar</label>
              <select name="tamu" class="form-control" id="">
                <option value="">-Pilih Kamar-</option>
                @foreach($jurusan as $data)
                <option value="{{$data->id}}" {{$tamu->booking == $data->id ? "selected" : "" }} >{{$data->kode}} - {{$data->booking}}</option>
                @endforeach
              </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection