@extends('adminlte::page')

@section('title', 'Sellers')

@section('content_header')
    <h1>Sellers</h1>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sellers List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Store Name</th>
                            <th>Owner</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dummy data for illustration -->
                        <tr>
                            <td>1</td>
                            <td>Music Store</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Instrument Shop</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
