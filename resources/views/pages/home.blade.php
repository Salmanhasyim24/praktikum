@extends('layouts.admin.app')

@section('title')
    Page Home
@endsection
@section('content')

<center style="margin-top: 300px">
    <div class="container">
        <h1 style="color: aqua">{{$judul}}</h1>
        <h4>{{$paragraf}}</h4>
    </div>
</center>
@endsection
