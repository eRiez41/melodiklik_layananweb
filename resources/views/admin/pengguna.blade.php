@extends('layouts.appadmin')

@section('title', 'Daftar Pengguna')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-4">Daftar Pengguna</h1>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Pengguna</button>
            <button class="btn btn-secondary" id="filterButton">Filter</button>
        </div>
    </div>

    <table class="table table-striped" style="background-color: #b1d182;">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Total Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $users = [
                    ['username' => 'user1', 'email' => 'user1@example.com', 'status' => 'online', 'total_transaksi' => 10],
                    ['username' => 'user2', 'email' => 'user2@example.com', 'status' => 'offline', 'total_transaksi' => 5],
                    ['username' => 'user3', 'email' => 'user3@example.com', 'status' => 'online', 'total_transaksi' => 8],
                    ['username' => 'user4', 'email' => 'user4@example.com', 'status' => 'offline', 'total_transaksi' => 12],
                    ['username' => 'user5', 'email' => 'user5@example.com', 'status' => 'online', 'total_transaksi' => 15],
                ];
            @endphp
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        @if ($user['status'] === 'online')
                            <span class="badge bg-success">Online</span>
                        @else
                            <span class="badge bg-secondary">Offline</span>
                        @endif
                    </td>
                    <td>{{ $user['total_transaksi'] }}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-username="{{ $user['username'] }}" data-email="{{ $user['email'] }}"
                            data-status="{{ $user['status'] }}" data-total="{{ $user['total_transaksi'] }}">Detail</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Detail Pengguna -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="detailUsername" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="detailUsername" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailEmail" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="detailEmail" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailStatus" class="form-label">Status:</label>
                    <input type="text" class="form-control" id="detailStatus" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailTotalTransaksi" class="form-label">Total Transaksi:</label>
                    <input type="text" class="form-control" id="detailTotalTransaksi" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="tambahUsername" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="tambahUsername" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="tambahEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahStatus" class="form-label">Status:</label>
                        <select class="form-select" id="tambahStatus" required>
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tambahTotalTransaksi" class="form-label">Total Transaksi:</label>
                        <input type="number" class="form-control" id="tambahTotalTransaksi" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="simpanPenggunaButton">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let detailModal = new bootstrap.Modal(document.getElementById('detailModal'));

        document.querySelectorAll('.detail-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                let username = this.getAttribute('data-username');
                let email = this.getAttribute('data-email');
                let status = this.getAttribute('data-status');
                let total = this.getAttribute('data-total');

                document.getElementById('detailUsername').value = username;
                document.getElementById('detailEmail').value = email;
                document.getElementById('detailStatus').value = status;
                document.getElementById('detailTotalTransaksi').value = total;

                detailModal.show();
            });
        });

        // Tombol Tambah Pengguna (dummy functionality)
        document.getElementById('simpanPenggunaButton').addEventListener('click', function() {
            let username = document.getElementById('tambahUsername').value;
            let email = document.getElementById('tambahEmail').value;
            let status = document.getElementById('tambahStatus').value;
            let total = document.getElementById('tambahTotalTransaksi').value;

            if (username && email && status && total) {
                // Simulasi tambah pengguna
                let newUser = {
                    username: username,
                    email: email,
                    status: status,
                    total_transaksi: total
                };

                // Tambahkan ke tabel (dummy implementation)
                let tbody = document.querySelector('tbody');
                let newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${tbody.children.length + 1}</td>
                    <td>${newUser.username}</td>
                    <td>${newUser.email}</td>
                    <td>
                        ${newUser.status === 'online' ? '<span class="badge bg-success">Online</span>' : '<span class="badge bg-secondary">Offline</span>'}
                    </td>
                    <td>${newUser.total_transaksi}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-username="${newUser.username}" data-email="${newUser.email}"
                            data-status="${newUser.status}" data-total="${newUser.total_transaksi}">Detail</button>
                    </td>
                `;
                tbody.appendChild(newRow);

                // Kosongkan input setelah simpan
                document.getElementById('tambahUsername').value = '';
                document.getElementById('tambahEmail').value = '';
                document.getElementById('tambahStatus').value = 'online';
                document.getElementById('tambahTotalTransaksi').value = '';

                // Tutup modal
                let tambahPenggunaModal = new bootstrap.Modal(document.getElementById('tambahModal'));
                tambahPenggunaModal.hide();
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
