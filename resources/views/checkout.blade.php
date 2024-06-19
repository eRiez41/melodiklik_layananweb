@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container">
    <h1 class="my-4">Checkout</h1>
    <div class="row">
        <div class="col-md-8">
            <h4>Informasi Pengiriman</h4>
            <form id="checkoutForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control" id="address" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="text" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Metode Pembayaran</label>
                    <select class="form-control" id="paymentMethod" required>
                        <option value="creditCard">Kartu Kredit</option>
                        <option value="bankTransfer">Transfer Bank</option>
                        <option value="cashOnDelivery">Bayar di Tempat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Bayar Sekarang</button>
            </form>
        </div>
        <div class="col-md-4">
            <div style="background-color: #2b463c; color: white; padding: 15px; border-radius: 10px;">
                <h4>Ringkasan Belanja</h4>
                <ul id="checkoutSummaryList"></ul>
                <h4>Total: Rp <span id="checkoutTotalAmount">0</span></h4>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const cartItems = JSON.parse(localStorage.getItem('selectedCartItems')) || [];

    document.addEventListener('DOMContentLoaded', function() {
        const checkoutSummaryList = document.getElementById('checkoutSummaryList');
        const checkoutTotalAmount = document.getElementById('checkoutTotalAmount');
        let totalAmount = 0;

        cartItems.forEach(item => {
            checkoutSummaryList.innerHTML += `<li>${item.name} - ${item.quantity} x Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</li>`;
            totalAmount += item.price * item.quantity;
        });

        checkoutTotalAmount.innerText = new Intl.NumberFormat('id-ID').format(totalAmount);

        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                icon: 'success',
                title: 'Pembayaran Berhasil',
                text: 'Terima kasih sudah berbelanja!',
                confirmButtonText: 'Lihat Transaksi'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route('transaksi.proses') }}';
                }
            });
        });
    });
</script>
@endsection
