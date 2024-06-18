<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
            font-size: 24px;
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
        }
        .navbar .nav-item .nav-link {
            color: #2b463c;
            margin-right: 15px;
        }
        .navbar .form-control {
            margin-right: 15px;
        }
        .navbar .nav-link i {
            font-size: 24px;
            margin-right: 10px;
        }
        .navbar .container .d-flex > *:not(:last-child) {
            margin-right: 15px; /* Menambahkan jarak antar elemen dalam navbar */
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
            width: 100px;
            height: 100px;
            cursor: pointer;
        }
        .category-buttons .btn.active {
            background-color: #b1d182;
            color: #2b463c;
        }
        .category-buttons .btn i {
            font-size: 24px;
            margin-bottom: 10px;
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
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .dropdown .dropdown-menu {
            background-color: #2b463c;
            color: #fff;
            margin-top: 5px;
        }
        .dropdown .dropdown-item {
            color: #fff;
        }
        .dropdown .dropdown-item:hover {
            background-color: #b1d182;
            color: #2b463c;
        }
        .dropdown-toggle {
            background-color: #2b463c !important;
            color: #fff !important;
            border: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <div>
            <h1><a href="{{ route('home') }}" style="color: #fff; text-decoration: none;">Melodiklik</a></h1>
        </div>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i> Tasikmalaya
        </div>
    </header>

    <nav class="navbar">
        <div class="container d-flex align-items-center justify-content-between">
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
                <a class="nav-link" href="{{ route('wishlist') }}"><i class="fas fa-heart"></i></a>
                <a class="nav-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#profileModal"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </nav>
    

    <!-- Modal Profil -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src="path_to_profile_image" alt="Foto Profil" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <form id="profileForm">
                        <div class="mb-3">
                            <label for="profileName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="profileName" value="Nama Anda" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="profileEmail" value="email@example.com" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="profileAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="profileAddress" value="Alamat Anda" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="profilePhone" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" id="profilePhone" value="Nomor Telepon Anda" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="editProfileButton">Edit</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>


    

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        let activeCategory = 'Elektrik';

        function filterBarang(kategori) {
            activeCategory = kategori;
            $('.product-card-wrapper').hide();
            $(`.product-card-wrapper[data-kategori="${kategori}"]`).show();
            setActiveCategory(kategori);
        }

        function showAllBarang() {
            $('.product-card-wrapper').show();
        }

        function setActiveCategory(kategori) {
            $('.category-buttons .btn').removeClass('active');
            $(`.category-buttons .btn:contains(${kategori})`).addClass('active');
        }

        $(document).ready(function() {
            filterBarang(activeCategory);

            $('#editProfileButton').click(function() {
                $('#profileName, #profileEmail, #profileAddress, #profilePhone').prop('readonly', false);
                $('#profileModalLabel').text('Edit Profil');
                $(this).hide();
                $('.modal-footer').prepend('<button type="button" class="btn btn-primary" id="saveProfileButton">Simpan</button>');
            });

            $(document).on('click', '#saveProfileButton', function() {
                $('#profileName, #profileEmail, #profileAddress, #profilePhone').prop('readonly', true);
                $('#profileModalLabel').text('Profil');
                $('#editProfileButton').show();
                $(this).remove();
            });
        });
    </script>
</body>
</html>
