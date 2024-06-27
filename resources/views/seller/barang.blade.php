@extends('layouts.appseller')

@section('title', 'Daftar Barang')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-4">Daftar Barang Seller</h1>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBarangModal">Tambah Barang</button>
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
            @php
                $barangna = [
                    ['name' => 'Gitar Elektrik Ibanez RG550', 'category' => 'Elektrik', 'stock' => 5, 'image' => 'path/to/image1.jpg'],
                    ['name' => 'Bass Fender Precision Bass', 'category' => 'Bass', 'stock' => 3, 'image' => 'path/to/image2.jpg'],
                    ['name' => 'Gitar Akustik Yamaha FG800', 'category' => 'Akustik', 'stock' => 7, 'image' => 'path/to/image3.jpg'],
                    ['name' => 'Drum Set Pearl Export Series', 'category' => 'Aksesoris', 'stock' => 2, 'image' => 'path/to/image4.jpg'],
                    ['name' => 'Keyboard Yamaha PSR-SX900', 'category' => 'Elektrik', 'stock' => 4, 'image' => 'path/to/image5.jpg'],
                    ['name' => 'Bass Warwick Corvette', 'category' => 'Bass', 'stock' => 6, 'image' => 'path/to/image6.jpg'],
                    ['name' => 'Gitar Akustik Martin D-28', 'category' => 'Akustik', 'stock' => 1, 'image' => 'path/to/image7.jpg'],
                    ['name' => 'Gelombang Suara Shure SM58', 'category' => 'Aksesoris', 'stock' => 8, 'image' => 'path/to/image8.jpg'],
                    ['name' => 'Gitar Elektrik Gibson Les Paul', 'category' => 'Elektrik', 'stock' => 3, 'image' => 'path/to/image9.jpg'],
                    ['name' => 'Bass Music Man StingRay', 'category' => 'Bass', 'stock' => 5, 'image' => 'path/to/image10.jpg'],
                    ['name' => 'Gitar Akustik Taylor 814ce', 'category' => 'Akustik', 'stock' => 4, 'image' => 'path/to/image11.jpg'],
                    ['name' => 'Microphone Shure SM7B', 'category' => 'Aksesoris', 'stock' => 6, 'image' => 'path/to/image12.jpg'],
                    ['name' => 'Keyboard Roland Fantom-8', 'category' => 'Elektrik', 'stock' => 2, 'image' => 'path/to/image13.jpg'],
                    ['name' => 'Bass Fender Jazz Bass', 'category' => 'Bass', 'stock' => 7, 'image' => 'path/to/image14.jpg'],
                    ['name' => 'Gitar Akustik Gibson J-45', 'category' => 'Akustik', 'stock' => 3, 'image' => 'path/to/image15.jpg'],
                    ['name' => 'Cymbal Zildjian K Custom', 'category' => 'Aksesoris', 'stock' => 4, 'image' => 'path/to/image16.jpg'],
                    ['name' => 'Gitar Elektrik PRS Custom 24', 'category' => 'Elektrik', 'stock' => 5, 'image' => 'path/to/image17.jpg'],
                    ['name' => 'Bass Yamaha BB Series', 'category' => 'Bass', 'stock' => 3, 'image' => 'path/to/image18.jpg'],
                    ['name' => 'Gitar Akustik Alvarez Artist Series', 'category' => 'Akustik', 'stock' => 2, 'image' => 'path/to/image19.jpg'],
                    ['name' => 'Speaker Aktif Yamaha DXR15', 'category' => 'Aksesoris', 'stock' => 1, 'image' => 'path/to/image20.jpg'],
                ];
            @endphp

                @foreach ($barangna as $key => $barang)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $barang['name'] }}</td>
                        <td>{{ $barang['category'] }}</td>
                        <td>{{ $barang['stock'] }}</td>
                        <td>
                            <button class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal" data-name="{{ $barang['name'] }}" data-category="{{ $barang['category'] }}" data-stock="{{ $barang['stock'] }}" data-image="{{ $barang['image'] }}">Detail</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Detail Barang -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img id="detailImage" src="" alt="Foto Barang" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <p><strong>Nama Barang:</strong> <span id="detailName"></span></p>
                        <p><strong>Kategori:</strong> <span id="detailCategory"></span></p>
                        <p><strong>Stok:</strong> <span id="detailStock"></span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="editButton" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger" id="deleteButton">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Barang -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nama Barang:</label>
                            <input type="text" class="form-control" id="editName" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="editCategory" class="form-label">Kategori:</label>
                            <input type="text" class="form-control" id="editCategory" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="editStock" class="form-label">Stok:</label>
                            <input type="number" class="form-control" id="editStock">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveEditButton">Simpan Perubahan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Barang -->
    <div class="modal fade" id="tambahBarangModal" tabindex="-1" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahBarangForm">
                        <div class="mb-3">
                            <label for="tambahName" class="form-label">Nama Barang:</label>
                            <input type="text" class="form-control" id="tambahName">
                        </div>
                        <div class="mb-3">
                            <label for="tambahCategory" class="form-label">Kategori:</label>
                            <select class="form-select" id="tambahCategory">
                                <option value="Elektrik">Elektrik</option>
                                <option value="Bass">Bass</option>
                                <option value="Akustik">Akustik</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tambahStock" class="form-label">Stok:</label>
                            <input type="number" class="form-control" id="tambahStock">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="simpanBarangButton">Simpan Barang</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    let detailModal = new bootstrap.Modal(document.getElementById('detailModal'), {
        backdrop: 'static' // Tidak menutup modal jika backdrop diklik
    });
    let editModal = new bootstrap.Modal(document.getElementById('editModal'), {
        backdrop: 'static' // Tidak menutup modal jika backdrop diklik
    });
    let tambahBarangModal = new bootstrap.Modal(document.getElementById('tambahBarangModal'));

    // Event listener untuk tombol Detail
    document.querySelectorAll('.detail-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            let name = this.getAttribute('data-name');
            let category = this.getAttribute('data-category');
            let stock = this.getAttribute('data-stock');
            let image = this.getAttribute('data-image');

            document.getElementById('detailName').textContent = name;
            document.getElementById('detailCategory').textContent = category;
            document.getElementById('detailStock').textContent = stock;
            document.getElementById('detailImage').setAttribute('src', image);

            detailModal.show();
        });
    });

    // Event listener untuk tombol Edit di dalam modal Detail
    document.getElementById('editButton').addEventListener('click', function() {
        let name = document.getElementById('detailName').textContent;
        let category = document.getElementById('detailCategory').textContent;
        let stock = document.getElementById('detailStock').textContent;

        document.getElementById('editName').value = name;
        document.getElementById('editCategory').value = category;
        document.getElementById('editStock').value = stock;

        detailModal.hide(); // Tutup modal Detail sebelum membuka modal Edit
        setTimeout(() => editModal.show(), 300); // Tampilkan modal Edit setelah modal Detail tertutup dengan animasi
    });

    // Event listener untuk tombol Hapus di dalam modal Detail (simulasi)
    document.getElementById('deleteButton').addEventListener('click', function() {
        alert('Barang dihapus (simulasi)');
        detailModal.hide();
        focusOnCloseModal(); // Panggil fungsi untuk mengatur fokus setelah modal ditutup
    });

    // Event listener untuk menangani penutupan modal Edit
    editModal._element.addEventListener('hidden.bs.modal', function() {
        refreshPage(); // Panggil fungsi untuk refresh halaman setelah modal Edit ditutup
    });

    // Event listener untuk tombol Simpan Edit
    document.getElementById('saveEditButton').addEventListener('click', function() {
        alert('Perubahan disimpan (simulasi)');
        editModal.hide();
        refreshPage(); // Panggil fungsi untuk refresh halaman setelah modal Edit ditutup
    });

    // Event listener untuk tombol Simpan Barang Baru
    document.getElementById('simpanBarangButton').addEventListener('click', function() {
        let tambahName = document.getElementById('tambahName').value;
        let tambahCategory = document.getElementById('tambahCategory').value;
        let tambahStock = document.getElementById('tambahStock').value;

        if (tambahName && tambahCategory && tambahStock) {
            // Buat objek barang baru
            let newBarang = {
                name: tambahName,
                category: tambahCategory,
                stock: tambahStock,
                image: 'path/to/default/image.jpg' // Ganti dengan path gambar default
            };

            // Tambahkan baris baru ke dalam tabel
            let tbody = document.querySelector('tbody');
            let newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${tbody.children.length + 1}</td>
                <td>${newBarang.name}</td>
                <td>${newBarang.category}</td>
                <td>${newBarang.stock}</td>
                <td>
                    <button class="btn btn-primary detail-btn" data-bs-toggle="modal" data-bs-target="#detailModal" 
                        data-name="${newBarang.name}" data-category="${newBarang.category}" data-stock="${newBarang.stock}" data-image="${newBarang.image}">Detail</button>
                </td>
            `;
            tbody.appendChild(newRow);

            // Kosongkan input setelah simpan
            document.getElementById('tambahName').value = '';
            document.getElementById('tambahCategory').value = 'Elektrik'; // Default kategori
            document.getElementById('tambahStock').value = '';

            tambahBarangModal.hide();
            focusOnCloseModal(); // Panggil fungsi untuk mengatur fokus setelah modal ditutup
        } else {
            alert('Harap isi semua field!');
        }
    });

    // Event listener untuk tombol Filter (simulasi)
    document.getElementById('filterButton').addEventListener('click', function() {
        let filterOptions = ['Semua', 'Elektrik', 'Bass', 'Akustik', 'Aksesoris'];

        let filterHTML = '<div class="dropdown">';
        filterHTML += '<button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">Filter</button>';
        filterHTML += '<ul class="dropdown-menu" aria-labelledby="filterDropdown">';
        filterOptions.forEach(option => {
            filterHTML += `<li><a class="dropdown-item" href="#" onclick="filterBarang('${option}')">${option}</a></li>`;
        });
        filterHTML += '</ul></div>';

        // Tambahkan dropdown filter di atas tabel
        let filterContainer = document.createElement('div');
        filterContainer.innerHTML = filterHTML;

        // Sisipkan sebelum tabel
        let container = document.querySelector('.container');
        container.insertBefore(filterContainer, container.firstChild);
    });

    // Fungsi untuk menyembunyikan/menampilkan barang berdasarkan kategori
    function filterBarang(kategori) {
        let rows = document.querySelectorAll('tbody tr');
        rows.forEach(row => {
            let categoryCell = row.querySelector('td:nth-child(3)').textContent;
            if (kategori !== 'Semua' && categoryCell !== kategori) {
                row.style.display = 'none';
            } else {
                row.style.display = '';
            }
        });
    }

    // Fungsi untuk mengatur fokus setelah modal ditutup
    function focusOnCloseModal() {
        // Fokus kembali ke tombol Detail pertama (simulasi)
        let firstDetailBtn = document.querySelector('.detail-btn');
        if (firstDetailBtn) {
            firstDetailBtn.focus();
        }
    }

    // Fungsi untuk refresh halaman
    function refreshPage() {
        location.reload();
    }
});

    </script>
@endsection

