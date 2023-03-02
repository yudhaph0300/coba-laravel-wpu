@extends('layouts.main')

@section('container')
    <h3>Halaman About</h3>
    <h5>Nama : {{ $name }}</h5>
    <h5>Email : {{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection
