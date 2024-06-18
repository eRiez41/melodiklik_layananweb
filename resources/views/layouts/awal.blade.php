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

   <br>
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

