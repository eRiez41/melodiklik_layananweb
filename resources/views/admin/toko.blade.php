@extends('layouts.appadmin')

@section('title', 'Daftar Toko')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-4">Daftar Toko</h1>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Toko</button>
        </div>
    </div>

    <table class="table table-striped" style="background-color: #b1d182;">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Toko</th>
                <th>Alamat</th>
                <th>Pemilik</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $stores = [
                    ['nama_toko' => 'Toko Musik A', 'alamat' => 'Jl. Sudirman No.1', 'pemilik' => 'Budi', 'kontak' => '081234567890'],
                    ['nama_toko' => 'Toko Musik B', 'alamat' => 'Jl. Thamrin No.2', 'pemilik' => 'Andi', 'kontak' => '081234567891'],
                    ['nama_toko' => 'Toko Musik C', 'alamat' => 'Jl. Merdeka No.3', 'pemilik' => 'Susi', 'kontak' => '081234567892'],
                    // Tambahkan data toko lainnya di sini
                ];
            @endphp
            @foreach ($stores as $index => $store)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $store['nama_toko'] }}</td>
                    <td>{{ $store['alamat'] }}</td>
                    <td>{{ $store['pemilik'] }}</td>
                    <td>{{ $store['kontak'] }}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-nama-toko="{{ $store['nama_toko'] }}" data-alamat="{{ $store['alamat'] }}"
                            data-pemilik="{{ $store['pemilik'] }}" data-kontak="{{ $store['kontak'] }}">Detail</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Detail Toko -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Toko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="detailNamaToko" class="form-label">Nama Toko:</label>
                    <input type="text" class="form-control" id="detailNamaToko" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailAlamat" class="form-label">Alamat:</label>
                    <input type="text" class="form-control" id="detailAlamat" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailPemilik" class="form-label">Pemilik:</label>
                    <input type="text" class="form-control" id="detailPemilik" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailKontak" class="form-label">Kontak:</label>
                    <input type="text" class="form-control" id="detailKontak" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Toko -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Toko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="namaToko" class="form-label">Nama Toko:</label>
                        <input type="text" class="form-control" id="namaToko" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="pemilik" class="form-label">Pemilik:</label>
                        <input type="text" class="form-control" id="pemilik" required>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak:</label>
                        <input type="text" class="form-control" id="kontak" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="simpanTokoButton">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let detailModal = new bootstrap.Modal(document.getElementById('detailModal'));

        document.querySelectorAll('.detail-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                let namaToko = this.getAttribute('data-nama-toko');
                let alamat = this.getAttribute('data-alamat');
                let pemilik = this.getAttribute('data-pemilik');
                let kontak = this.getAttribute('data-kontak');

                document.getElementById('detailNamaToko').value = namaToko;
                document.getElementById('detailAlamat').value = alamat;
                document.getElementById('detailPemilik').value = pemilik;
                document.getElementById('detailKontak').value = kontak;

                detailModal.show();
            });
        });

        // Tombol Tambah Toko (dummy functionality)
        document.getElementById('simpanTokoButton').addEventListener('click', function() {
            let namaToko = document.getElementById('namaToko').value;
            let alamat = document.getElementById('alamat').value;
            let pemilik = document.getElementById('pemilik').value;
            let kontak = document.getElementById('kontak').value;

            if (namaToko && alamat && pemilik && kontak) {
                // Simulasi tambah toko
                let newStore = {
                    nama_toko: namaToko,
                    alamat: alamat,
                    pemilik: pemilik,
                    kontak: kontak
                };

                // Tambahkan ke tabel (dummy implementation)
                let tbody = document.querySelector('tbody');
                let newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${tbody.children.length + 1}</td>
                    <td>${newStore.nama_toko}</td>
                    <td>${newStore.alamat}</td>
                    <td>${newStore.pemilik}</td>
                    <td>${newStore.kontak}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-nama-toko="${newStore.nama_toko}" data-alamat="${newStore.alamat}"
                            data-pemilik="${newStore.pemilik}" data-kontak="${newStore.kontak}">Detail</button>
                    </td>
                `;
                tbody.appendChild(newRow);

                // Kosongkan input setelah simpan
                document.getElementById('namaToko').value = '';
                document.getElementById('alamat').value = '';
                document.getElementById('pemilik').value = '';
                document.getElementById('kontak').value = '';

                // Tutup modal
                let tambahTokoModal = new bootstrap.Modal(document.getElementById('tambahModal'));
                tambahTokoModal.hide();
            } else {
                alert('Harap isi semua field!');
            }
        });
    });
</script>

@endsection
