@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Gudang</h1>
    <a href="{{ route('gudang.create') }}" class="btn btn-primary mb-3">Tambah Gudang</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gudang</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudangs as $key => $gudang)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $gudang->nama }}</td>
                    <td>{{ $gudang->lokasi }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('gudang.edit', $gudang->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('gudang.destroy', $gudang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus gudang ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
