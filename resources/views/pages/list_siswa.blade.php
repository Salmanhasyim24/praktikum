@extends('layouts.admin.app')
@section('title')
    Page Lihat Siswa
@endsection

@section('content')
<div class="jumbotron jumbotron">
    <div class="container" >
      <h1 class="display-5">Lihat Siswa</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>
  <div class="container">
     <div class="row">
      <div class="col-md-12">
        <table id="table_siswa" class="display">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Lahir</th>
                <th scope="col">Gender</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $i=0 @endphp
                @foreach ($siswas as $siswa)
                @php $i++ @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->lahir }}, {{ \Carbon\Carbon::parse($siswa->tgl)->format('d/m/Y')}}</td>

                    <td>{{ $siswa->jk }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->telp }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td><form method="POST" action="{{ route('destroy-siswa',$siswa->id) }}">
                        <a button type="button" class="btn btn-warning" href="{{ route('edit-siswa',$siswa->id) }}">Edit</button></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a button type="button" class="btn btn-primary" href="{{ route('show-bio',$siswa->id) }}">Lihat</button></a>
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{ route('add-siswa') }}">
          <button type="button" class="btn btn-primary">Add New</button></a>
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
