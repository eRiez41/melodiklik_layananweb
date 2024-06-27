@extends('layouts.appadmin')

@section('content')
    <div class="container">
        <h1 class="my-4">Admin Dashboard</h1>

        <div class="row mb-4">
            <!-- Box info untuk total toko -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-store fa-3x text-info"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total Toko</h5>
                                <p class="card-text">10</p> <!-- Ganti dengan data dinamis -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box info untuk total barang -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-box-open fa-3x text-primary"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total Barang</h5>
                                <p class="card-text">50</p> <!-- Ganti dengan data dinamis -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box info untuk total user -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-users fa-3x text-secondary"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total User</h5>
                                <p class="card-text">100</p> <!-- Ganti dengan data dinamis -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box info untuk jumlah user aktif -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-user-check fa-3x text-success"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">User Aktif</h5>
                                <p class="card-text">80</p> <!-- Ganti dengan data dinamis -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Tabel barang terbaru -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Barang Terbaru
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Toko</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Electric Guitar</td>
                                        <td>Toko Musik Harmoni</td>
                                        <td>2024-06-15</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Acoustic Guitar</td>
                                        <td>Toko Seriosa Musik</td>
                                        <td>2024-06-14</td>
                                    </tr>
                                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik keaktifan user -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Statistik Keaktifan User
                    </div>
                    <div class="card-body">
                        <!-- Masukkan chart atau data keaktifan user di sini -->
                        <canvas id="userActivityChart" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js untuk diagram statistik keaktifan user -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('userActivityChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'User Aktif',
                    data: [50, 60, 70, 65, 75, 80], // Ganti dengan data dinamis
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
