@extends('layouts.admin.app')

@section('title')
    Page Biodata
@endsection

@section('content')
<div class="jumbotron jumbotron">
    <div class="container my-5">
      <h1 class="display-4">Biodata Siswa</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <img src="{{ url('salman.jpeg') }}" class="rounded-circle" width="80%">
      </div>
      <div class="col-md-6">
        Informasi Pribadi
        <div class="card">
            <div class="card-header">
              <h5 class="card-title">Informasi Ku</h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">Nama Lengkap</div>
                <div class="col-md-6">: {{ $nama }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Tempat, Tanggal Lahir</div>
                <div class="col-md-6">: {{ $lahir }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Hobby</div>
                <div class="col-md-6">: {{ $hobi }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Jenis Kelamin</div>
                <div class="col-md-6">: {{ $jk }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Agama</div>
                <div class="col-md-6">: {{ $agama }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Alamat</div>
                <div class="col-md-6">: {{ $alamat }}</div>
             </div>
              <div class="row">
                 <div class="col-md-6">Telp</div>
                 <div class="col-md-6">: {{ $telp }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">Email</div>
                <div class="col-md-6">: {{ $email }}</div>
             </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        Riwayat Pendidikan
        <div class="list-group">
            <div class="list-group-item list-group-item-action">
              <h5 class="mb-1">SMK Bakti Nusantara 666</h5>
              <p class="mb-1">Rekayasa Perangkat Lunak</p>
              <small>2019 - 2022</small>
            </div>
            <div class="list-group-item list-group-item-action">
              <h5 class="mb-1">SMP IT Imam Bukhari</h5>
              <small>2016 - 2019</small>
            </div>
            <div class="list-group-item list-group-item-action">
              <h5 class="mb-1">SD IT Imam Bukhari</h5>
              <small>1995 - 1998</small>
            </div>
      </div>
    </div>
    <div class="text-center mt-5 mb-5"><h4>Pencapaian dan Pengalaman</h4></div>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><h5 class="card-title">Pencapaian</h5></div>
        <div class="list-group list-group-horizontal">
          <div class="list-group-item">Pencapaian 1</div>
          <div class="list-group-item">Pencapaian 2</div>
          <div class="list-group-item">Pencapaian 3</div>
          <div class="list-group-item">Pencapaian 4</div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><h5 class="card-title">Pengalaman</h5></div>
        <div class="list-group list-group-horizontal">
          <div class="list-group-item">Pengalaman 1</div>
          <div class="list-group-item">Pengalaman 2</div>
          <div class="list-group-item">Pengalaman 3</div>
          <div class="list-group-item">Pengalaman 4</div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
