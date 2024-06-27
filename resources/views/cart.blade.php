@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<div class="container">
    <h1 class="my-4">Keranjang</h1>
    <div class="row">
        <div class="col-md-9">
            <div class="row mb-3">
                <div class="col-md-12">
                    <button class="btn btn-primary" id="selectAllButton">Pilih Semua</button>
                </div>
            </div>
            <div class="row" id="cartItemsContainer">
                <!-- Daftar barang akan diisi oleh JavaScript -->
            </div>
        </div>
        <div class="col-md-3">
            <div style="background-color: #2b463c; color: white; padding: 15px; border-radius: 10px;">
                <h4>Ringkasan Belanja</h4>
                <ul id="summaryList"></ul>
                <h4>Total: Rp <span id="totalAmount">0</span></h4>
                <a href="{{ route('checkout') }}" class="btn btn-success mt-3">Checkout</a>
            </div>
        </div>
    </div>
</div>
<script>
    const cartItems = [
        { id: 1, name: 'Gitar Elektrik', image: 'https://via.placeholder.com/150', price: 1500000, quantity: 1 },
        { id: 2, name: 'Gitar Akustik', image: 'https://via.placeholder.com/150', price: 800000, quantity: 2 },
        { id: 3, name: 'Bass', image: 'https://via.placeholder.com/150', price: 1200000, quantity: 1 },
        { id: 4, name: 'Aksesoris', image: 'https://via.placeholder.com/150', price: 200000, quantity: 3 }
    ];

    document.addEventListener('DOMContentLoaded', function() {
        const cartItemsContainer = document.getElementById('cartItemsContainer');
        const summaryList = document.getElementById('summaryList');
        const totalAmount = document.getElementById('totalAmount');

        function renderCartItems() {
            cartItemsContainer.innerHTML = '';
            cartItems.forEach(item => {
                cartItemsContainer.innerHTML += `
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input item-checkbox" type="checkbox" data-id="${item.id}">
                                </div>
                                <img src="${item.image}" class="img-thumbnail me-3" style="width: 150px;" alt="${item.name}">
                                <div>
                                    <h5 class="card-title">${item.name}</h5>
                                    <p class="card-text">Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</p>
                                    <div class="d-flex align-items-center">
                                        <div class="btn-group me-3">
                                            <button class="btn btn-outline-secondary" onclick="updateQuantity(${item.id}, -1)">-</button>
                                            <input type="text" class="form-control text-center" value="${item.quantity}" style="width: 50px;" readonly>
                                            <button class="btn btn-outline-secondary" onclick="updateQuantity(${item.id}, 1)">+</button>
                                        </div>
                                        <button class="btn btn-danger" onclick="removeFromCart(${item.id})">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
        }

        function updateSummary() {
            let total = 0;
            summaryList.innerHTML = '';
            document.querySelectorAll('.item-checkbox:checked').forEach(checkbox => {
                const item = cartItems.find(item => item.id == checkbox.dataset.id);
                if (item) {
                    summaryList.innerHTML += `<li>${item.name} - ${item.quantity} x Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</li>`;
                    total += item.price * item.quantity;
                }
            });
            totalAmount.innerText = new Intl.NumberFormat('id-ID').format(total);
            localStorage.setItem('selectedCartItems', JSON.stringify(cartItems.filter(item => document.querySelector(`.item-checkbox[data-id="${item.id}"]`).checked)));
        }

        document.getElementById('selectAllButton').addEventListener('click', function() {
            document.querySelectorAll('.item-checkbox').forEach(checkbox => checkbox.checked = true);
            updateSummary();
        });

        document.getElementById('cartItemsContainer').addEventListener('change', updateSummary);

        window.updateQuantity = function(id, change) {
            const item = cartItems.find(item => item.id == id);
            if (item) {
                item.quantity = Math.max(1, item.quantity + change);
                renderCartItems();
                updateSummary();
            }
        }

        window.removeFromCart = function(id) {
            const index = cartItems.findIndex(item => item.id == id);
            if (index !== -1) {
                cartItems.splice(index, 1);
                renderCartItems();
                updateSummary();
            }
        }

        renderCartItems();
    });
</script>
@endsection
