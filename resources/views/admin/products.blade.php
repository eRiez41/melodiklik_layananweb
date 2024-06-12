@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Seller</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy data for illustration -->
                        <tr>
                            <td>1</td>
                            <td>Guitar</td>
                            <td>Music Store</td>
                            <td>Rp 1.500.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Piano</td>
                            <td>Instrument Shop</td>
                            <td>Rp 3.000.000</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
