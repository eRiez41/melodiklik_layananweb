<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $barang['gambar'] }}" class="img-fluid" alt="{{ $barang['nama'] }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $barang['nama'] }}</h1>
                <p>Seri: {{ $barang['seri'] }}</p>
                <h3>Rp {{ number_format($barang['harga'], 0, ',', '.') }}</h3>
                <p>Penjual: {{ $barang['toko'] }}</p>
                <p>Rating: {{ $barang['rating'] }} / 5</p>
                <div class="d-flex">
                    <button class="btn btn-primary me-2">Beli Sekarang</button>
                    <button class="btn btn-secondary">Masukkan ke Wishlist</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
