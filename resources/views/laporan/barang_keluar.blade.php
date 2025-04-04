@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan Barang Keluar</h1>
    <a href="{{ route('laporan.barang_keluar.pdf') }}" class="btn btn-danger mb-3">Export PDF</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Keluar</th>
                <th>Penerima</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangKeluar as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->barang->merk ?? '-' }} ({{ $item->barang->tipe ?? '-' }})</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->satuan }}</td>
                    <td>{{ $item->tanggal_keluar }}</td>
                    <td>{{ $item->penerima }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
