@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang Keluar</h1>
    <a href="{{ route('barang_keluar.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('barang_keluar.update', $barangKeluar->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang_id" class="form-control" required>
                @foreach ($barang as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $barangKeluar->barang_id ? 'selected' : '' }}>
                        {{ $item->merk }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $barangKeluar->jumlah }}" required>
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" value="{{ $barangKeluar->satuan }}" required>
        </div>

        <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" name="tanggal_keluar" class="form-control" value="{{ $barangKeluar->tanggal_keluar }}" required>
        </div>

        <div class="form-group">
            <label>Penerima</label>
            <input type="text" name="penerima" class="form-control" value="{{ $barangKeluar->penerima }}" required>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $barangKeluar->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>
</div>
@endsection
