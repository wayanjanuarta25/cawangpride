@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Title and Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Manajemen Materiil</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a> > 
            <a href="{{ route('barang.index') }}" class="text-decoration-none fw-bold">Stock Materiil</a>
        </nav>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Card with Table and Button -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Daftar Materiil</h5>
            <div class="text-end">
                <a href="{{ route('barang.create') }}" class="btn btn-primary mb-2">
                    <i class="fas fa-plus"></i> Tambah Materiil
                </a>
                <a href="{{ route('barang.exportAllPDF') }}" class="btn btn-success mb-2">
                    <i class="fas fa-file-pdf"></i> Download Semua Materiil
                </a>
            </div>            
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
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
                                <a href="{{ route('barang.exportItemPDF', $item->id) }}" class="btn btn-sm btn-secondary">
                                    <i class="fas fa-file-pdf"></i>
                                </a>                                
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
        </div>
    </div>
</div>
@endsection
