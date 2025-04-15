@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Data Materiil Keluar</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a> > 
            <span>Materiil Keluar</span>
        </nav>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Materiil Keluar</h5>
            <a href="{{ route('barang_keluar.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Materiil Keluar
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Materiil</th>
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
                            <td>{{ $item->barang->merk ?? '-' }} ({{ $item->barang->tipe ?? '-' }})</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_keluar)->format('d-m-Y') }}</td>
                            <td>{{ $item->penerima }}</td>
                            <td>
                                <a href="{{ route('barang_keluar.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('barang_keluar.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('barang_keluar.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Kalau pakai pagination --}}
            {{ $barangKeluar->links() }}
        </div>
    </div>
</div>
@endsection
