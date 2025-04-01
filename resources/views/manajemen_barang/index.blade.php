@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Materiil</th>
                <th>Sub Jenis</th>
                <th>Sub Sub Jenis</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>No Seri</th>
                <th>Produk (Negara)</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->jenisMateriil->nama ?? '-' }}</td>
                    <td>{{ $item->subJenis->nama ?? '-' }}</td>
                    <td>{{ $item->subSubJenis->nama ?? '-' }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->tipe }}</td>
                    <td>{{ $item->no_seri }}</td>
                    <td>{{ $item->produk }}</td>
                    <td>{{ $item->kondisi }}</td>
                    <td class="action-icons">
                        <a href="{{ route('barang.show', $item->id) }}" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang ini?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>                                     
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
