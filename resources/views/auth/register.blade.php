<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f1e9;
            color: #f4f1e9;
        }
        .navbar {
            background-color: #2b463c;
        }
        .navbar-brand {
            color: #f4f1e9 !important;
        }
        .card {
            background-color: #2b463c;
            border: none;
        }
        .card-title {
            color: #f4f1e9;
        }
        .form-label, .form-control {
            color: #f4f1e9;
            background-color: #2b463c;
        }
        .form-control::placeholder {
            color: #f4f1e9;
        }
        .btn-primary {
            background-color: #b1d182;
            border-color: #b1d182;
            color: #2b463c;
        }
        .btn-primary:hover {
            background-color: #9fbe71;
            border-color: #9fbe71;
        }
        .text-center a {
            color: #f4f1e9;
        }
        .text-center a:hover {
            color: #d4cfc3;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        .form-control {
            max-width: 100%;
        }
        .btn {
            max-width: 60%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Navbar Header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MelodiKlik</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Register</h3>
                        <div class="form-container">
                            <form method="POST" action="#">
                                @csrf
                                <div class="mb-3">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required placeholder="Enter your full name">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Enter your address">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="noTelepon" class="form-label">No Telepon</label>
                                    <input type="tel" class="form-control" id="noTelepon" name="noTelepon" required placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="sebagai" class="form-label">Sebagai</label>
                                    <select class="form-control" id="sebagai" name="sebagai" required>
                                        <option value="" disabled selected>Select your role</option>
                                        <option value="penjual">Penjual</option>
                                        <option value="pembeli">Pembeli</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required placeholder="Confirm your password">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to handle form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Perform registration logic here (e.g., send data to server)

            // Display alert
            alert('Registration successful! You will now be redirected to the login page.');

            // Redirect to login page
            window.location.href = "/login";
        });
    </script>
</body>
</html>
