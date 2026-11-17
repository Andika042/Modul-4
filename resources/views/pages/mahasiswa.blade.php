@extends('layouts.master')

@section('content')
    <h2>Daftar Mahasiswa</h2>
    <ul>
        @foreach ($mahasiswa as $mhs)
            <li>{{ $mhs }}</li>
        @endforeach
    </ul>
@endsection