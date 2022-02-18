@extends('layouts.admin.app')

@section('title')
    Page Biodata
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Biodata Siswa</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <img src="" class="rounded-circle" width="80%">
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
              <div class="col-md-6">: {{ $bio->nama }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Tempat, Tanggal Lahir</div>
              <div class="col-md-6">: {{ $bio->lahir }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Hobby</div>
              <div class="col-md-6">: {{ $bio->hoby }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Jenis Kelamin</div>
              <div class="col-md-6">: {{ $bio->jk }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Agama</div>
              <div class="col-md-6">: {{ $bio->agama }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Alamat</div>
              <div class="col-md-6">: {{ $bio->alamat }}</div>
           </div>
            <div class="row">
               <div class="col-md-6">Telp</div>
               <div class="col-md-6">: {{ $bio->telp }}</div>
            </div>
            <div class="row">
              <div class="col-md-6">Email</div>
              <div class="col-md-6">: {{ $bio->email }}</div>
           </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      Riwayat Pendidikan
      <div class="list-group">
          <div class="list-group-item list-group-item-action">
            <h5 class="mb-1">Universitas Komputer Indonesia</h5>
            <p class="mb-1">Sistem Informasi</p>
            <small>2021 - 2005</small>
          </div>
          <div class="list-group-item list-group-item-action">
            <h5 class="mb-1">SMA Negeri 2 Cimahi</h5>
            <p class="mb-1">Ilmu Pengetahuan Sosial</p>
            <small>1998 - 2021</small>
          </div>
          <div class="list-group-item list-group-item-action">
            <h5 class="mb-1">SMP Negeri 3 Cimahi</h5>
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
