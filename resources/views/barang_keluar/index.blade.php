@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Barang Keluar</h1>
    <a href="{{ route('barang_keluar.create') }}" class="btn btn-primary mb-3">Tambah Barang Keluar</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Keluar</th>
                <th>Penerima</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangKeluar as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->barang->merk ?? '-' }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->satuan }}</td>
                    <td>{{ $item->tanggal_keluar }}</td>
                    <td>{{ $item->penerima }}</td>
                    <td>
                        <a href="{{ route('barang_keluar.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('barang_keluar.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang_keluar.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
