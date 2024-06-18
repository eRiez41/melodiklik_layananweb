@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<div class="container">
    <h1 class="my-4">Keranjang</h1>
    <div class="row">
        <!-- Contoh item keranjang -->
        @foreach ($cartItems as $item)
        <div class="col-md-3">
            <div class="card mb-4">
                <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <p class="card-text">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary" onclick="decreaseQuantity({{ $item['id'] }})">-</button>
                            <input type="text" class="form-control text-center" value="{{ $item['quantity'] }}" style="width: 50px;">
                            <button class="btn btn-outline-secondary" onclick="increaseQuantity({{ $item['id'] }})">+</button>
                        </div>
                        <button class="btn btn-danger" onclick="removeFromCart({{ $item['id'] }})">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12 text-end">
            <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
            <button class="btn btn-success mt-3">Checkout</button>
        </div>
    </div>
</div>
<script>
    function decreaseQuantity(id) {
        // Logic untuk mengurangi jumlah item
    }

    function increaseQuantity(id) {
        // Logic untuk menambah jumlah item
    }

    function removeFromCart(id) {
        // Logic untuk menghapus item dari keranjang
    }
</script>
@endsection
