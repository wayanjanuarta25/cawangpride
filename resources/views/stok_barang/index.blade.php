@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Stok Barang</h1>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stokBarang as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->barang->merk ?? '-' }}</td>
                    <td>{{ $item->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
