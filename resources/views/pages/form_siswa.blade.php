@extends('layouts.admin.app')
@section('title')
    Page Form Tambah Siswa
@endsection

@section('content')
<div class="jumbotron jumbotron">
    <div class="container my-5">
      <h1 class="display-5">Tambah Siswa</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="post" action="/store_siswa">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pob">Tempat Lahir</label>
                        <input type="text" class="form-control" id="nama" placeholder="Tempat Kelahiran" name="tmpt">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dob">Tanggal</label>
                        <input type="date" class="form-control" id="tgl" placeholder="Tanggal Kelahiran" name="tgl">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" id="jk" name="jk">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="agama">Agama</label>
                    <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Hobby</label>
                  <input type="text" class="form-control" id="hobby" placeholder="Hobby Anda" name="hobby">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Apartment, studio, or floor" name="alamat">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telp">Telp</label>
                        <input type="number" class="form-control" id="telp" placeholder="Telp" name="telp">
                      </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="mail" placeholder="Email" name="email">
                    </div>
                  </div>

                    <button type="submit" class="btn btn-primary" >Tambah Data</button>
              </form>
        </div>
    </div>
</div>
@endsection
@push('addon-style')
<link rel="stylesheet" type="text/css" media="screen" href="{{url('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}">
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{url('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js')}}"></script>
@endpush
@push('prepend-script')
<script>
    $(document).ready( function () {
        $('#table_siswa').DataTable();
    } );
    </script>
@endpush
@push('addon-script')
     <!-- Datatables -->
     <script src="{{url('https://code.jquery.com/jquery-3.3.1.min.js')}}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <script type="text/javascript" charset="utf8" src="{{url('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js')}}"></script>
@endpush
