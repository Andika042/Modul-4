@extends('layouts.master')

@section('content')
<h1>Detail Produk</h1>
<hr>
<div class="card">
    <div class="card-header">
        Detail Produk
    </div>
    <div class="card-body">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://placehold.co/400" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$detail_produk->name_product}}</h5>
                        <p></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Harga: Rp. {{number_format($detail_produk->price_product, 0, ',', '.')}}</li>
                            <li class="list-group-item">Stok: {{$detail_produk->stock_product}} pcs</li>
                            <li class="list-group-item">Tipe Saus: {{$detail_produk->desc_product}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/product" class="btn btn-primary">Kembali ke product</a>
                        </div>
                    </div>
                </div>
                <p class="card-text p-2"><small class="text-muted">{{$detail_produk->updated_at}}</small></p>
            </div>
        </div>
    </div>
</div>
@endsection
