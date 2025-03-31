@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan Barang Masuk</h1>
    <a href="{{ route('laporan.barang_masuk.pdf') }}" class="btn btn-danger mb-3">Export PDF</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Kondisi</th>
                <th>Tanggal Masuk</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangMasuk as $key => $barang)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>{{ $barang->kondisi }}</td>
                    <td>{{ $barang->tanggal_masuk }}</td>
                    <td>{{ $barang->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
