@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="header d-flex justify-content-between align-items-center">
                    <h1>MelodiKlik</h1>
                    <div class="navbar-right d-flex">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary">Profil</button>
                            <button type="button" class="btn btn-outline-primary">Keranjang</button>
                            <button type="button" class="btn btn-outline-primary">Wishlist</button>
                        </div>
                        <div class="ml-3">
                            <input type="text" class="form-control d-inline-block" placeholder="Cari...">
                            <select class="form-control d-inline-block ml-2">
                                <option value="">Filter Kategori</option>
                                <option value="gitar">Gitar</option>
                                <option value="piano">Piano</option>
                                <option value="drum">Drum</option>
                                <!-- Tambahkan kategori lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Data dummy barang -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Gitar">
                            <div class="card-body">
                                <h5 class="card-title">Gitar Akustik</h5>
                                <p class="card-text">Rp 1.500.000</p>
                                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Piano">
                            <div class="card-body">
                                <h5 class="card-title">Piano Digital</h5>
                                <p class="card-text">Rp 3.000.000</p>
                                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Drum">
                            <div class="card-body">
                                <h5 class="card-title">Set Drum</h5>
                                <p class="card-text">Rp 4.500.000</p>
                                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Biola">
                            <div class="card-body">
                                <h5 class="card-title">Biola</h5>
                                <p class="card-text">Rp 2.000.000</p>
                                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan barang-barang lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>
@endsection
