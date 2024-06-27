@extends('layouts.app')

@section('title', 'Wishlist')

@section('content')
<div class="container">
    <h1 class="my-4">Wishlist</h1>
    <div class="row">
        @foreach ($wishlistItems as $item)
        <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #2b463c; color: #fff;">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                    <div class="text-end">
                        <a href="{{ route('barang.show', $item['id']) }}" class="btn btn-primary" style="color: #2b463c; background-color: #b1d182; border-color: #b1d182;">Lihat Produk</a>
                        <a href="#" class="btn btn-danger ms-2" style="color: #2b463c; background-color: #b1d182; border-color: #b1d182;">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
