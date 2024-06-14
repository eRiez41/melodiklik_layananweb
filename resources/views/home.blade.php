<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodiklik - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Menambahkan FontAwesome -->
    <style>
        body {
            background-color: #f4f1e9;
        }
        .header {
            background-color: #2b463c;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 24px; /* Memperkecil tulisan Melodiklik */
        }
        .header .location {
            display: flex;
            align-items: center;
        }
        .header .location i {
            margin-right: 5px;
        }
        .navbar {
            background-color: #b1d182;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .nav-item .nav-link {
            color: #2b463c;
            margin-right: 15px;
        }
        .navbar .form-control {
            margin-right: 15px;
        }
        .navbar .nav-link i {
            font-size: 24px; /* Membuat ikon lebih besar */
            margin-right: 10px; /* Menambahkan jarak antara ikon */
        }
        .category-buttons {
            background-color: #f4f1e9;
            padding: 20px 0;
            display: flex;
            justify-content: center;
        }
        .category-buttons .btn {
            background-color: #2b463c;
            color: #fff;
            border: none;
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border-radius: 50%;
            width: 100px; /* Menyelaraskan ukuran */
            height: 100px; /* Menyelaraskan ukuran */
        }
        .category-buttons .btn i {
            font-size: 24px;
            margin-bottom: 10px; /* Menambahkan jarak antara ikon dan teks */
        }
        .product-card {
            background-color: #fff;
            border: none;
            margin: 10px;
        }
        .product-card img {
            max-width: 100%;
        }
        .product-card .card-body {
            padding: 10px;
        }
        .product-card .card-title {
            color: #2b463c;
        }
        .btn-view-all {
            background-color: #2b463c;
            color: #fff;
            border: none;
            margin: 20px;
        }
        .dropdown .dropdown-menu {
            background-color: #2b463c; /* Warna dropdown */
            color: #fff;
        }
        .dropdown .dropdown-item {
            color: #fff;
        }
        .dropdown .dropdown-item:hover {
            background-color: #b1d182;
            color: #2b463c;
        }
        .dropdown-toggle {
            background-color: #2b463c !important; /* Warna dropdown button */
            color: #fff !important;
            border: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <div>
            <h1>Melodiklik</h1>
        </div>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i> Tasikmalaya <!-- Menambahkan icon maps -->
        </div>
    </header>

    <nav class="navbar">
    <div class="d-flex align-items-center">
        <div class="nav-item dropdown mr-3">
            <button class="btn dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
            </button>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('kategori', 'Elektrik') }}">Elektrik</a></li>
                <li><a class="dropdown-item" href="{{ route('kategori', 'Akustik') }}">Akustik</a></li>
                <li><a class="dropdown-item" href="{{ route('kategori', 'Bass') }}">Bass</a></li>
                <li><a class="dropdown-item" href="{{ route('kategori', 'Aksesoris') }}">Aksesoris</a></li>
            </ul>
        </div>
        <input type="text" class="form-control" placeholder="Cari...">
    </div>
    <div class="d-flex align-items-center">
        <a class="nav-link" href="{{ route('wishlist') }}"><i class="fas fa-heart"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
        <a class="nav-link" href="{{ route('keranjang') }}"><i class="fas fa-shopping-cart"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fas fa-user"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
    </div>
</nav>


    <div class="container-fluid category-buttons">
        <button class="btn" onclick="window.location.href='{{ route('kategori', 'Elektrik') }}'"><i class="fas fa-guitar"></i> <span>Elektrik</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="window.location.href='{{ route('kategori', 'Akustik') }}'"><i class="fas fa-music"></i> <span>Akustik</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="window.location.href='{{ route('kategori', 'Bass') }}'"><i class="fas fa-guitar"></i> <span>Bass</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="window.location.href='{{ route('kategori', 'Aksesoris') }}'"><i class="fas fa-headphones-alt"></i> <span>Aksesoris</span></button> <!-- Menambahkan icon -->
    </div>

    <div class="container">
        <div class="row">
            <!-- Produk asli -->
            <div class="col-md-3">
                <div class="card product-card" onclick="window.location.href='{{ route('produk', 1) }}'">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//catalog-image/91/MTA-127230354/brd-44261_gitar-elektrik-merk-ibanez-model-jem-flower-bonus-tas-dan-kabel-jack-listrik-murah-jakarta_full01-4c5445d2.jpg" class="card-img-top" alt="Gitar Elektrik">
                    <div class="card-body">
                        <h5 class="card-title">Gitar Elektrik</h5>
                        <p class="card-text">Rp 2.000.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card" onclick="window.location.href='{{ route('produk', 2) }}'">
                    <img src="https://static-siplah.blibli.com/data/images/SBST-0024-00043/11367eed-e991-4cb0-b13c-759c2c5845e3.jpg" class="card-img-top" alt="Gitar Akustik">
                    <div class="card-body">
                        <h5 class="card-title">Gitar Akustik</h5>
                        <p class="card-text">Rp 1.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card" onclick="window.location.href='{{ route('produk', 3) }}'">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-3696105/yamaha_yamaha-trbx174-gitar-bass-electric---hitam_full03.jpg" class="card-img-top" alt="Gitar Bass">
                    <div class="card-body">
                        <h5 class="card-title">Gitar Bass</h5>
                        <p class="card-text">Rp 2.500.000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card" onclick="window.location.href='{{ route('produk', 4) }}'">
                    <img src="https://www.sweelee.co.id/cdn/shop/products/products_2FI01-AEG7MH-OPN_2FI01-AEG7MH-OPN_1581489652420_600x600.jpg?v=1634630727" class="card-img-top" alt="Aksesoris">
                    <div class="card-body">
                        <h5 class="card-title">Gitar Ibanez</h5>
                        <p class="card-text">Rp 2.500.000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end">
            <button class="btn btn-view-all">Lihat Semua</button> <!-- Pindah ke kanan -->
        </div>
    </div>

    <!-- Modal Profil -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Profil</h5>
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fas fa-user"></i></a>
            </div>
            <div class="modal-body">
                <!-- Tambahkan konten profil di sini -->
                <form>
                    <div class="mb-3">
                        <label for="profileName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="profileName" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="profileEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="profileEmail" placeholder="Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="profilePassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="profilePassword" placeholder="Password Anda">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        // Initialize Bootstrap Dropdown
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        })
    </script>
</body>
</html>
