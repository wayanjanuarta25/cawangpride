@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang Keluar</h1>
    <a href="{{ route('barang_keluar.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama Barang</th>
            <td>{{ $barangKeluar->barang->merk ?? '-' }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $barangKeluar->jumlah }}</td>
        </tr>
        <tr>
            <th>Satuan</th>
            <td>{{ $barangKeluar->satuan }}</td>
        </tr>
        <tr>
            <th>Tanggal Keluar</th>
            <td>{{ $barangKeluar->tanggal_keluar }}</td>
        </tr>
        <tr>
            <th>Penerima</th>
            <td>{{ $barangKeluar->penerima }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $barangKeluar->keterangan ?? '-' }}</td>
        </tr>
    </table>
</div>
@endsection
