<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melodiklik - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
        }
        .category-buttons .btn i {
            font-size: 24px;
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kategori
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Elektrik</a>
                    <a class="dropdown-item" href="#">Akustik</a>
                    <a class="dropdown-item" href="#">Bass</a>
                    <a class="dropdown-item" href="#">Aksesoris</a>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Cari...">
        </div>
        <div class="d-flex align-items-center">
            <a class="nav-link" href="#"><i class="fas fa-heart"></i> Wishlist</a> <!-- Menambahkan icon -->
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Keranjang</a> <!-- Menambahkan icon -->
            <a class="nav-link" href="#"><i class="fas fa-user"></i> User</a> <!-- Menambahkan icon -->
        </div>
    </nav>

    <div class="container-fluid category-buttons">
        <button class="btn"><i class="fas fa-guitar"></i> <span>Elektrik</span></button> <!-- Menambahkan icon -->
        <button class="btn"><i class="fas fa-music"></i> <span>Akustik</span></button> <!-- Menambahkan icon -->
        <button class="btn"><i class="fas fa-bass-guitar"></i> <span>Bass</span></button> <!-- Menambahkan icon -->
        <button class="btn"><i class="fas fa-headphones-alt"></i> <span>Aksesoris</span></button> <!-- Menambahkan icon -->
    </div>

    <div class="container">
        <div class="row">
            <!-- Dummy data for products -->
            @for ($i = 0; $i < 5; $i++)
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Gitar Akustik</h5>
                            <p class="card-text">Rp 1.500.000</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center">
            <button class="btn btn-view-all">Lihat Semua</button>
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
