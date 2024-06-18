<!-- resources/views/barang/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<style>
        body {
            background-color: #f4f1e9;
            font-family: Arial, sans-serif;
        }
        .product-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .product-price {
            font-size: 20px;
            color: #e74c3c;
            margin: 10px 0;
        }
        .product-description {
            margin: 20px 0;
        }
        .product-rating {
            color: #f39c12;
        }
        .btn-buy, .btn-wishlist {
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            font-size: 16px;
        }
        .btn-buy {
            background-color: #2ecc71;
            color: #fff;
            border: none;
        }
        .btn-wishlist {
            background-color: #3498db;
            color: #fff;
            border: none;
        }
        .btn-buy:hover, .btn-wishlist:hover {
            opacity: 0.9;
        }
        .product-images img {
            max-width: 100%;
            border-radius: 5px;
        }
        .seller-info {
            margin-top: 20px;
        }
        .seller-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .seller-rating {
            color: #f39c12;
        }
    </style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 product-images">
            <img src="{{ $barang['gambar'] }}" class="img-fluid" alt="{{ $barang['nama'] }}">
        </div>
        <div class="col-md-6 product-details">
            <h1 class="product-title">{{ $barang['nama'] }}</h1>
            <h3 class="product-price">Rp {{ number_format($barang['harga'], 0, ',', '.') }}</h3>
            <p class="product-description">Deskripsi produk lengkap akan ditampilkan di sini.</p>
            <p class="product-rating">
                Rating: {{ $barang['rating'] }} / 5 
                <i class="fas fa-star"></i>
            </p>
            <div class="d-flex">
                <button class="btn btn-buy">Beli Sekarang</button>
                <button class="btn btn-wishlist">Masukkan ke Wishlist</button>
            </div>
            <div class="seller-info">
                <p class="seller-name">Penjual: {{ $barang['toko'] }}</p>
                <p class="seller-rating">Rating Toko: 4.5 / 5 <i class="fas fa-star"></i></p>
            </div>
        </div>
    </div>
</div>
@endsection
