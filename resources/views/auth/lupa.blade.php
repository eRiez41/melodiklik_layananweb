<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .hide {
            display: none;
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
                        <h3 class="card-title text-center mb-4">Lupa Kata Sandi</h3>
                        <div class="form-container">
                            <!-- Form Reset Password -->
                            <form id="resetPasswordForm">
                                <div class="mb-3">
                                    <label for="resetEmail" class="form-label">Masukkan Email Anda</label>
                                    <input type="email" class="form-control" id="resetEmail" name="resetEmail" required placeholder="Enter your email">
                                </div>
                                <button type="button" onclick="sendResetCode()" class="btn btn-primary w-100">Kirim Kode</button>
                            </form>

                            <!-- Form Enter Code -->
                            <form id="enterCodeForm" class="hide">
                                <div class="mb-3">
                                    <label for="resetCode" class="form-label">Masukkan Kode</label>
                                    <input type="text" class="form-control" id="resetCode" name="resetCode" required placeholder="Enter the code">
                                </div>
                                <button type="button" onclick="verifyCode()" class="btn btn-primary w-100">Verifikasi</button>
                            </form>

                            <!-- Form New Password -->
                            <form id="newPasswordForm" class="hide">
                                <div class="mb-3">
                                    <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword" required placeholder="Enter new password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPassword" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                    <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" required placeholder="Confirm new password">
                                </div>
                                <button type="button" onclick="submitNewPassword()" class="btn btn-primary w-100">Simpan Kata Sandi Baru</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function sendResetCode() {
            // Tampilkan form untuk memasukkan kode
            document.getElementById("resetPasswordForm").classList.add("hide");
            document.getElementById("enterCodeForm").classList.remove("hide");
        }

        function verifyCode() {
            // Tampilkan form untuk memasukkan kata sandi baru
            document.getElementById("enterCodeForm").classList.add("hide");
            document.getElementById("newPasswordForm").classList.remove("hide");
        }

        function submitNewPassword() {
            // Simpan kata sandi baru dan lakukan sesuatu (misalnya, kirim ke server)
            alert("Kata sandi berhasil diubah!");
               // Redirect ke halaman login
               window.location.href = "/login";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
