@extends('layouts.appseller')

@section('content')
    <div class="container">
        <h1 class="my-4">Seller Dashboard</h1>

        <div class="row mb-4">
            <!-- Box info untuk total barang -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-box-open fa-3x text-primary"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total Products</h5>
                                <p class="card-text">50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box info untuk kategori barang -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-tags fa-3x text-success"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total Categories</h5>
                                <p class="card-text">5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box info untuk total transaksi -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <i class="fas fa-money-bill-wave fa-3x text-warning"></i>
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">Total Transactions</h5>
                                <p class="card-text">100</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Tabel transaksi terbaru -->
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Recent Transactions
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>Electric Guitar</td>
                                        <td>1</td>
                                        <td>$1,500</td>
                                        <td>2024-06-15</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jane Smith</td>
                                        <td>Acoustic Guitar</td>
                                        <td>2</td>
                                        <td>$2,400</td>
                                        <td>2024-06-14</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Michael Johnson</td>
                                        <td>Drum Set</td>
                                        <td>1</td>
                                        <td>$3,000</td>
                                        <td>2024-06-13</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Sarah Adams</td>
                                        <td>Keyboard</td>
                                        <td>1</td>
                                        <td>$800</td>
                                        <td>2024-06-12</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>David Brown</td>
                                        <td>Bass Guitar</td>
                                        <td>1</td>
                                        <td>$1,200</td>
                                        <td>2024-06-11</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Lisa Green</td>
                                        <td>Violin</td>
                                        <td>1</td>
                                        <td>$600</td>
                                        <td>2024-06-10</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Matthew Wilson</td>
                                        <td>Saxophone</td>
                                        <td>1</td>
                                        <td>$1,000</td>
                                        <td>2024-06-09</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik penjualan dalam bentuk diagram -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Sales Statistics
                    </div>
                    <div class="card-body">
                        <canvas id="salesChart" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js untuk diagram statistik penjualan -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
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
