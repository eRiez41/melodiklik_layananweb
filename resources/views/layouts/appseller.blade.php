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

        /* Tambahkan CSS untuk modal profil */
        .modal-content {
            background-color: #2b463c !important;
            color: #fff !important;
        }
        .modal-footer .btn {
            background-color: #b1d182;
            color: #2b463c;
            border: none;
        }
        .modal-footer .btn:hover {
            background-color: #b1d182;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .profile-form {
            flex: 1;
            margin-left: 20px;
        }
        .profile-info .form-control {
            background-color: #2b463c;
            border: 1px solid #fff;
            color: #fff;
        }
        .profile-info .form-control:focus {
            background-color: #2b463c;
            border-color: #b1d182;
            color: #fff;
        }
        .profile-info .form-label {
            color: #fff;
        }
        .profile-info .input-group-text {
            background-color: #2b463c;
            border-color: #fff;
            color: #fff;
        }
        .profile-info .input-group-text:focus {
            background-color: #2b463c;
            border-color: #b1d182;
            color: #fff;
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
                
                <input type="text" class="form-control" placeholder="Cari...">
            </div>
            <div class="d-flex align-items-center">
                <a class="nav-link" href="{{ route('seller.dashboard') }}"> Dashboard</a>
                <a class="nav-link" href="{{ route('penjualan') }}">Penjualan</a>
                <a class="nav-link" href="{{ route('barang.seller') }}">Barang</a>
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
                <div class="modal-body d-flex align-items-start">
                    <div class="text-center">
                        <img id="profileImage" src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="Foto Profil" class="img-thumbnail profile-image">
                        <input type="file" id="profileImageInput" style="display: none;" accept="image/*">
                    </div>
                    <form id="profileForm" class="profile-form">
                        <div class="mb-3">
                            <label for="profileName" class="form-label">Nama :</label>
                            <span class="profile-info" id="profileName">MelodiKlik</span>
                            <input type="text" class="form-control" id="profileNameInput" style="display: none;">
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label">Email :</label>
                            <span class="profile-info" id="profileEmail">melodiklik@gmail.com</span>
                            <input type="email" class="form-control" id="profileEmailInput" style="display: none;">
                        </div>
                        <div class="mb-3">
                            <label for="profileAddress" class="form-label">Alamat :</label>
                            <span class="profile-info" id="profileAddress">Singaparna, Jawa Barat</span>
                            <input type="text" class="form-control" id="profileAddressInput" style="                            display: none;">
                        </div>
                        <div class="mb-3">
                            <label for="profilePhone" class="form-label">No. Telepon :</label>
                            <span class="profile-info" id="profilePhone">087624556715</span>
                            <input type="text" class="form-control" id="profilePhoneInput" style="display: none;">
                        </div>
                        <div id="passwordFields" style="display: none;">
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Sandi Sekarang :</label>
                                <input type="password" class="form-control" id="currentPassword">
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Sandi Baru :</label>
                                <input type="password" class="form-control" id="newPassword">
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Sandi Baru :</label>
                                <input type="password" class="form-control" id="confirmPassword">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="editProfileButton">Edit Profil</button>
                    <button type="button" class="btn btn-secondary" id="logoutButton">Logout</button>
                    <button type="button" class="btn btn-primary" id="saveProfileButton" style="display: none;">Simpan Perubahan</button>
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
                $('#profileName, #profileEmail, #profileAddress, #profilePhone').hide();
                $('#profileNameInput, #profileEmailInput, #profileAddressInput, #profilePhoneInput, #passwordFields').show();
                $('#profileNameInput').val($('#profileName').text());
                $('#profileEmailInput').val($('#profileEmail').text());
                $('#profileAddressInput').val($('#profileAddress').text());
                $('#profilePhoneInput').val($('#profilePhone').text());

                $('#profileModalLabel').text('Edit Profil');
                $('#editProfileButton').hide();
                $('#logoutButton').hide();
                $('#saveProfileButton').show();
            });

            $('#saveProfileButton').click(function() {
                $('#profileName').text($('#profileNameInput').val()).show();
                $('#profileEmail').text($('#profileEmailInput').val()).show();
                $('#profileAddress').text($('#profileAddressInput').val()).show();
                $('#profilePhone').text($('#profilePhoneInput').val()).show();

                $('#profileNameInput, #profileEmailInput, #profileAddressInput, #profilePhoneInput, #passwordFields').hide();
                $('#profileModalLabel').text('Profil');
                $('#editProfileButton').show();
                $('#logoutButton').show();
                $('#saveProfileButton').hide();
            });

            $('#profileImage').click(function() {
                $('#profileImageInput').click();
            });

            $('#profileImageInput').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#profileImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>

