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
            padding: 10px 20px; /* Menambahkan padding */
            border-radius: 5px; /* Menambahkan border-radius */
        }
        .dropdown .dropdown-menu {
            background-color: #2b463c; /* Warna dropdown */
            color: #fff;
            margin-top: 5px; /* Menambahkan jarak atas */
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
                    <li><a class="dropdown-item" href="#" onclick="filterBarang('Elektrik')">Elektrik</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterBarang('Akustik')">Akustik</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterBarang('Bass')">Bass</a></li>
                    <li><a class="dropdown-item" href="#" onclick="filterBarang('Aksesoris')">Aksesoris</a></li>
                </ul>
            </div>
            <input type="text" class="form-control" placeholder="Cari...">
        </div>
        <div class="d-flex align-items-center">
            <a class="nav-link" href="#"><i class="fas fa-heart"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
            <a class="nav-link" href="#"><i class="fas fa-user"></i></a> <!-- Menambahkan icon dan menghilangkan label -->
        </div>
    </nav>

    <div class="container-fluid category-buttons">
        <button class="btn" onclick="filterBarang('Elektrik')"><i class="fas fa-guitar"></i> <span>Elektrik</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="filterBarang('Akustik')"><i class="fas fa-music"></i> <span>Akustik</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="filterBarang('Bass')"><i class="fas fa-guitar"></i> <span>Bass</span></button> <!-- Menambahkan icon -->
        <button class="btn" onclick="filterBarang('Aksesoris')"><i class="fas fa-headphones-alt"></i> <span>Aksesoris</span></button> <!-- Menambahkan icon -->
    </div>

    <div class="container">
        <div class="row">
            @foreach ($barang as $item)
                <div class="col-md-3 product-card-wrapper" data-kategori="{{ $item['kategori'] }}">
                    <div class="card product-card">
                        <img src="{{ $item['gambar'] }}" class="card-img-top" alt="{{ $item['nama'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['nama'] }}</h5>
                            <p class="card-text">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-end">
            <button class="btn btn-view-all">Lihat Semua</button> <!-- Pindah ke kanan -->
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterBarang(kategori) {
            $('.product-card-wrapper').hide(); // Sembunyikan semua kartu produk
            $(`.product-card-wrapper[data-kategori="${kategori}"]`).show(); // Tampilkan kartu produk yang sesuai kategori
        }
        $(document).ready(function() {
            filterBarang('Elektrik'); // Default menampilkan kategori Elektrik
        });
    </script>
</body>
</html>
