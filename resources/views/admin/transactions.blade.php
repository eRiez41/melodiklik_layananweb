@extends('adminlte::page')

@section('title', 'Transactions')

@section('content_header')
    <h1>Transactions</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Transactions List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Transaction ID</th>
                            <th>Seller</th>
                            <th>Buyer</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy data for illustration -->
                        <tr>
                            <td>1</td>
                            <td>TXN001</td>
                            <td>Music Store</td>
                            <td>John Doe</td>
                            <td>Rp 1.500.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TXN002</td>
                            <td>Instrument Shop</td>
                            <td>Jane Smith</td>
                            <td>Rp 3.000.000</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
