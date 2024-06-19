@extends('layouts.app')

@section('title', 'Proses Transaksi')

@section('content')
<div class="container">
    <h1 class="my-4">Proses Transaksi</h1>
    <div class="row">
        <div class="col-md-12">
            <h4>Pesanan Anda Sedang Diproses</h4>
            <p>Terima kasih atas pembelian Anda. Pesanan Anda sedang diproses dan akan segera dikirimi. Silakan cek kembali dalam beberapa saat untuk melihat status pesanan Anda.</p>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali ke Dashboard</a>
        </div>
    </div>
</div>
@endsection

