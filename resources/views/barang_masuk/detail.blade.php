@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Detail Barang Masuk</h1>
        <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Informasi Barang Masuk</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Nama Barang</th>
                            <td>{{ $barangMasuk->barang->merk }} - {{ $barangMasuk->barang->tipe }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>{{ $barangMasuk->jumlah }}</td>
                        </tr>
                        <tr>
                            <th>Satuan</th>
                            <td>{{ $barangMasuk->satuan }}</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>{{ $barangMasuk->kondisi }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>{{ \Carbon\Carbon::parse($barangMasuk->tanggal_masuk)->format('d-m-Y') }}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>{{ $barangMasuk->keterangan ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
