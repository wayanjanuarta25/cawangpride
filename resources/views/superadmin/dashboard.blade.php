@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <!-- Ringkasan Data -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $barangMasukCount }}</h3>
                    <p>Barang Masuk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $barangKeluarCount }}</h3>
                    <p>Barang Keluar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalGudang }}</h3>
                    <p>Total Gudang</p>
                </div>
                <div class="icon">
                    <i class="fas fa-warehouse"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tabel Barang Terbaru -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Barang Terbaru</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentTransactions as $index => $transaction)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $transaction->nama_barang }}</td>
                        <td>{{ $transaction->jumlah }}</td>
                        <td>
                            <span class="badge {{ $transaction->status == 'Masuk' ? 'bg-success' : 'bg-danger' }}">
                                {{ $transaction->status }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
