<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Ringkasan Data -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
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
                    <h3>120</h3>
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
                    <h3>10</h3>
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
                    <h3>5</h3>
                    <p>Total User</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Grafik Pergerakan Barang -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Grafik Pergerakan Barang</h3>
        </div>
        <div class="card-body">
            <canvas id="barangChart"></canvas>
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
                    <tr>
                        <td>1</td>
                        <td>Barang A</td>
                        <td>50</td>
                        <td><span class="badge bg-success">Masuk</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Barang B</td>
                        <td>30</td>
                        <td><span class="badge bg-danger">Keluar</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('barangChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Barang Masuk',
                data: [12, 19, 3, 5, 2],
                backgroundColor: 'rgba(54, 162, 235, 0.5)'
            }, {
                label: 'Barang Keluar',
                data: [5, 10, 7, 8, 6],
                backgroundColor: 'rgba(255, 99, 132, 0.5)'
            }]
        }
    });
</script>
@endsection