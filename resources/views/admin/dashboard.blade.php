@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('content_header')
    <h1>Admin Dashboard</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Users</span>
                        <span class="info-box-number">150</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-store"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Sellers</span>
                        <span class="info-box-number">53</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-box"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Products</span>
                        <span class="info-box-number">500</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-check-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Transactions</span>
                        <span class="info-box-number">200</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- USERS LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Members</h3>
                        <div class="card-tools">
                            <span class="badge badge-danger">8 New Members</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="https://via.placeholder.com/128" alt="User Image">
                                <a class="users-list-name" href="#">John Doe</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="https://via.placeholder.com/128" alt="User Image">
                                <a class="users-list-name" href="#">Jane Smith</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <!-- Add more user list items here -->
                        </ul>
                    </div>
                </div>

                <!-- PRODUCT LIST -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Products</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                    <img src="https://via.placeholder.com/128" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Gitar Akustik
                                        <span class="badge badge-warning float-right">Rp 1.500.000</span></a>
                                    <span class="product-description">Produk musik berkualitas tinggi.</span>
                                </div>
                            </li>
                            <li class="item">
                                <div class="product-img">
                                    <img src="https://via.placeholder.com/128" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Piano Digital
                                        <span class="badge badge-warning float-right">Rp 3.000.000</span></a>
                                    <span class="product-description">Alat musik yang sangat baik untuk pemula.</span>
                                </div>
                            </li>
                            <!-- Add more product list items here -->
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right col -->
            <div class="col-md-4">
                <!-- USERS CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Chart</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="users-chart" style="height: 300px;"></div>
                    </div>
                </div>

                <!-- SALES CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sales Chart</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('users-chart', {
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'User Growth'
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Number of Users'
                    }
                },
                series: [{
                    name: 'Users',
                    data: [29, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]
                }]
            });

            Highcharts.chart('sales-chart', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Monthly Sales'
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Sales (Rp)'
                    }
                },
                series: [{
                    name: 'Sales',
                    data: [5000000, 3000000, 4000000, 7000000, 2000000, 5000000, 6000000, 3000000, 7000000, 8000000, 9000000, 10000000]
                }]
            });
        });
    </script>
@endsection
