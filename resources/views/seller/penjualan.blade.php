@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')
<div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-4">Daftar Transaksi Seller</h1>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Barang</button>
                <button class="btn btn-secondary" id="filterButton">Filter</button>
            </div>
        </div>

        <table class="table table-striped" style="background-color: #b1d182;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                            @php
                                $transactions = [
                                    ['buyer_name' => 'John Doe', 'total_price' => 1500000, 'date' => '2023-01-01'],
                                    ['buyer_name' => 'Jane Smith', 'total_price' => 2200000, 'date' => '2023-02-15'],
                                    ['buyer_name' => 'Michael Brown', 'total_price' => 1800000, 'date' => '2023-03-20'],
                                    ['buyer_name' => 'Emily Davis', 'total_price' => 1300000, 'date' => '2023-04-10'],
                                    ['buyer_name' => 'Daniel Wilson', 'total_price' => 1900000, 'date' => '2023-05-05'],
                                ];
                            @endphp
                            @foreach ($transactions as $index => $transaction)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $transaction['buyer_name'] }}</td>
                                    <td>Rp {{ number_format($transaction['total_price'], 0, ',', '.') }}</td>
                                    <td>{{ $transaction['date'] }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                                            data-buyer-name="{{ $transaction['buyer_name'] }}" data-total-price="{{ $transaction['total_price'] }}"
                                            data-date="{{ $transaction['date'] }}">Detail</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Transaksi -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="detailBuyerName" class="form-label">Nama Pembeli:</label>
                        <input type="text" class="form-control" id="detailBuyerName" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="detailTotalPrice" class="form-label">Total Harga:</label>
                        <input type="text" class="form-control" id="detailTotalPrice" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="detailDate" class="form-label">Tanggal:</label>
                        <input type="text" class="form-control" id="detailDate" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Transaksi -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="buyerName" class="form-label">Nama Pembeli:</label>
                            <input type="text" class="form-control" id="buyerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="totalPrice" class="form-label">Total Harga:</label>
                            <input type="number" class="form-control" id="totalPrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal:</label>
                            <input type="date" class="form-control" id="date" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="simpanTransaksiButton">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let detailModal = new bootstrap.Modal(document.getElementById('detailModal'));

            document.querySelectorAll('.detail-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    let buyerName = this.getAttribute('data-buyer-name');
                    let totalPrice = this.getAttribute('data-total-price');
                    let date = this.getAttribute('data-date');

                    document.getElementById('detailBuyerName').value = buyerName;
                    document.getElementById('detailTotalPrice').value = 'Rp ' + totalPrice.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    document.getElementById('detailDate').value = date;

                    detailModal.show();
                });
            });

            // Tombol Tambah Transaksi (dummy functionality)
            document.getElementById('simpanTransaksiButton').addEventListener('click', function() {
                let buyerName = document.getElementById('buyerName').value;
                let totalPrice = document.getElementById('totalPrice').value;
                let date = document.getElementById('date').value;

                if (buyerName && totalPrice && date) {
                    // Simulasi tambah transaksi
                    let newTransaction = {
                        buyer_name: buyerName,
                        total_price: totalPrice,
                        date: date
                    };

                    // Tambahkan ke tabel (dummy implementation)
                    let tbody = document.querySelector('tbody');
                    let newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${tbody.children.length + 1}</td>
                        <td>${newTransaction.buyer_name}</td>
                        <td>Rp ${newTransaction.total_price.replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</td>
                        <td>${newTransaction.date}</td>
                        <td>
                            <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                                data-buyer-name="${newTransaction.buyer_name}" data-total-price="${newTransaction.total_price}" data-date="${newTransaction.date}">Detail</button>
                        </td>
                    `;
                    tbody.appendChild(newRow);

                    // Kosongkan input setelah simpan
                    document.getElementById('buyerName').value = '';
                    document.getElementById('totalPrice').value = '';
                    document.getElementById('date').value = '';

                    // Tutup modal
                    let tambahTransaksiModal = new bootstrap.Modal(document.getElementById('tambahModal'));
                    tambahTransaksiModal.hide();
                } else {
                    alert('Harap isi semua field!');
                }
            });

            // Event untuk tombol Filter (simulasi)
            document.getElementById('filterButton').addEventListener('click', function() {
                alert('Fitur filter sedang dalam pengembangan.');
            });
        });
    </script>
@endsection
