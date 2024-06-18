@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-4">Daftar Transaksi Seller</h1>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Transaksi</button>
            <button class="btn btn-secondary" id="filterButton">Filter</button>
        </div>
    </div>

    <table class="table table-striped" style="background-color: #b1d182;">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode Transaksi</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $transactions = [
                    ['kode_transaksi' => 'TRX001', 'barang' => 'Gitar Elektrik Ibanez RG550', 'jumlah' => 1, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX002', 'barang' => 'Bass Fender Precision Bass', 'jumlah' => 2, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX003', 'barang' => 'Gitar Akustik Yamaha FG800', 'jumlah' => 1, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX004', 'barang' => 'Drum Set Pearl Export Series', 'jumlah' => 1, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX005', 'barang' => 'Keyboard Yamaha PSR-SX900', 'jumlah' => 3, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX006', 'barang' => 'Bass Warwick Corvette', 'jumlah' => 1, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX007', 'barang' => 'Gitar Akustik Martin D-28', 'jumlah' => 2, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX008', 'barang' => 'Gelombang Suara Shure SM58', 'jumlah' => 1, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX009', 'barang' => 'Gitar Elektrik Gibson Les Paul', 'jumlah' => 1, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX010', 'barang' => 'Bass Music Man StingRay', 'jumlah' => 2, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX011', 'barang' => 'Gitar Akustik Taylor 814ce', 'jumlah' => 1, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX012', 'barang' => 'Microphone Shure SM7B', 'jumlah' => 3, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX013', 'barang' => 'Keyboard Roland Fantom-8', 'jumlah' => 1, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX014', 'barang' => 'Bass Fender Jazz Bass', 'jumlah' => 2, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX015', 'barang' => 'Gitar Akustik Gibson J-45', 'jumlah' => 1, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX016', 'barang' => 'Cymbal Zildjian K Custom', 'jumlah' => 2, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX017', 'barang' => 'Gitar Elektrik PRS Custom 24', 'jumlah' => 1, 'status' => 'Dikirim'],
                    ['kode_transaksi' => 'TRX018', 'barang' => 'Bass Yamaha BB Series', 'jumlah' => 3, 'status' => 'Selesai'],
                    ['kode_transaksi' => 'TRX019', 'barang' => 'Gitar Akustik Alvarez Artist Series', 'jumlah' => 1, 'status' => 'Diproses'],
                    ['kode_transaksi' => 'TRX020', 'barang' => 'Speaker Aktif Yamaha DXR15', 'jumlah' => 2, 'status' => 'Dikirim'],
                ];
            @endphp
            @foreach ($transactions as $index => $transaction)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $transaction['kode_transaksi'] }}</td>
                    <td>{{ $transaction['barang'] }}</td>
                    <td>{{ $transaction['jumlah'] }}</td>
                    <td>{{ $transaction['status'] }}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-kode-transaksi="{{ $transaction['kode_transaksi'] }}" data-barang="{{ $transaction['barang'] }}"
                            data-jumlah="{{ $transaction['jumlah'] }}" data-status="{{ $transaction['status'] }}">Detail</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
                    <label for="detailKodeTransaksi" class="form-label">Kode Transaksi:</label>
                    <input type="text" class="form-control" id="detailKodeTransaksi" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailBarang" class="form-label">Barang:</label>
                    <input type="text" class="form-control" id="detailBarang" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailJumlah" class="form-label">Jumlah:</label>
                    <input type="text" class="form-control" id="detailJumlah" readonly>
                </div>
                <div class="mb-3">
                    <label for="detailStatus" class="form-label">Status:</label>
                    <input type="text" class="form-control" id="detailStatus" readonly>
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
                        <label for="kodeTransaksi" class="form-label">Kode Transaksi:</label>
                        <input type="text" class="form-control" id="kodeTransaksi" required>
                    </div>
                    <div class="mb-3">
                        <label for="barang" class="form-label">Barang:</label>
                        <input type="text" class="form-control" id="barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <select class="form-select" id="status" required>
                            <option value="Diproses">Diproses</option>
                            <option value="Dikirim">Dikirim</option>
                            <option value="Selesai">Selesai</option>
                        </select>
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
                let kodeTransaksi = this.getAttribute('data-kode-transaksi');
                let barang = this.getAttribute('data-barang');
                let jumlah = this.getAttribute('data-jumlah');
                let status = this.getAttribute('data-status');

                document.getElementById('detailKodeTransaksi').value = kodeTransaksi;
                document.getElementById('detailBarang').value = barang;
                document.getElementById('detailJumlah').value = jumlah;
                document.getElementById('detailStatus').value = status;

                detailModal.show();
            });
        });

        // Tombol Tambah Transaksi (dummy functionality)
        document.getElementById('simpanTransaksiButton').addEventListener('click', function() {
            let kodeTransaksi = document.getElementById('kodeTransaksi').value;
            let barang = document.getElementById('barang').value;
            let jumlah = document.getElementById('jumlah').value;
            let status = document.getElementById('status').value;

            if (kodeTransaksi && barang && jumlah && status) {
                // Simulasi tambah transaksi
                let newTransaction = {
                    kode_transaksi: kodeTransaksi,
                    barang: barang,
                    jumlah: jumlah,
                    status: status
                };

                // Tambahkan ke tabel (dummy implementation)
                let tbody = document.querySelector('tbody');
                let newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${tbody.children.length + 1}</td>
                    <td>${newTransaction.kode_transaksi}</td>
                    <td>${newTransaction.barang}</td>
                    <td>${newTransaction.jumlah}</td>
                    <td>${newTransaction.status}</td>
                    <td>
                        <button type="button" class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal"
                            data-kode-transaksi="${newTransaction.kode_transaksi}" data-barang="${newTransaction.barang}"
                            data-jumlah="${newTransaction.jumlah}" data-status="${newTransaction.status}">Detail</button>
                    </td>
                `;
                tbody.appendChild(newRow);

                // Kosongkan input setelah simpan
                document.getElementById('kodeTransaksi').value = '';
                document.getElementById('barang').value = '';
                document.getElementById('jumlah').value = '';
                document.getElementById('status').value = 'Diproses';

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
