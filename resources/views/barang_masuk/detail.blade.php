@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang Masuk</h1>
    <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered">
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
            <td>{{ $barangMasuk->tanggal_masuk }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $barangMasuk->keterangan }}</td>
        </tr>
    </table>
</div>
@endsection
