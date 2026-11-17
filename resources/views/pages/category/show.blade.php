@extends('layouts.master')

@section('content')
<h1>Daftar Kategori</h1>
<hr>
@if (session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="card">
    <div class="card-header">
        Kategori Kami
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategori as $item)
                <tr>
                    <th scope="row">{{($kategori->perPage() * ($kategori->currentPage()-1)) +
                        $loop->iteration}}</th>
                    <td>Nama Kategori</td>
                    <td>Deskripsi Kategori</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Data yang anda cari tidak ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div>
            {{ $kategori->links('pagination::bootstrap-5') }}
            Halaman : {{ $kategori->currentPage() }} <br />
            Jumlah Data : {{ $kategori->total() }} <br />
            Data Per Halaman : {{ $kategori->perPage() }} <br />
        </div>
    </div>
</div>
@endsection
