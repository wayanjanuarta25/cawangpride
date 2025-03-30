@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Barang Masuk</h1>
        <a href="{{ route('barang_masuk.create') }}" class="btn btn-primary mb-3">Tambah Barang Masuk</a>

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
                    <th>Kondisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangMasuk as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->barang->merk ?? '-' }} ({{ $item->barang->tipe }})</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>{{ $item->kondisi }}</td>
                        <td>{{ $item->tanggal_masuk }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('barang_masuk.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('barang_masuk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('barang_masuk.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus barang masuk ini?')">Hapus</button>
                            </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $barangMasuk->links() }}
    </div>
@endsection
