@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
<div class="container">
    <h1>Wishlist</h1>
    <div class="row">
        @foreach ($wishlistItems as $item)
            <div class="col-md-3">
                <div class="card mb-4">
                    <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                        <p class="card-text">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                        <a href="{{ route('barang.show', $item['id']) }}" class="btn btn-primary">Lihat Produk</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
