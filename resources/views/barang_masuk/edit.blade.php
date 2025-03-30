@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang Masuk</h1>
    <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('barang_masuk.update', $barangMasuk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang_id" class="form-control" required>
                <option value="">Pilih Barang</option>
                @foreach ($barang as $item)
                    <option value="{{ $item->id }}" {{ $barangMasuk->barang_id == $item->id ? 'selected' : '' }}>
                        {{ $item->merk }} ({{ $item->tipe }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $barangMasuk->jumlah }}" required>
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" value="{{ $barangMasuk->satuan }}" required>
        </div>

        <div class="form-group">
            <label>Kondisi</label>
            <select name="kondisi" class="form-control" required>
                <option value="Baik" {{ $barangMasuk->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Rusak Ringan" {{ $barangMasuk->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                <option value="Rusak Berat" {{ $barangMasuk->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
            </select>
        </div>

        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="{{ $barangMasuk->tanggal_masuk }}" required>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $barangMasuk->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
