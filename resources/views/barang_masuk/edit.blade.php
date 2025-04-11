@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Edit Materiil Masuk</h1>
        <a href="{{ route('barang_masuk.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Form Edit Materiil Masuk</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('barang_masuk.update', $barangMasuk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nama Materiil</label>
                        <select name="barang_id" class="form-control" required>
                            <option value="">Pilih Barang</option>
                            @foreach ($barang as $item)
                                <option value="{{ $item->id }}" {{ $barangMasuk->barang_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->merk }} ({{ $item->tipe }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" value="{{ $barangMasuk->jumlah }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Satuan</label>
                        <input type="text" name="satuan" class="form-control" value="{{ $barangMasuk->satuan }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Kondisi</label>
                        <select name="kondisi" class="form-control" required>
                            <option value="Baik" {{ $barangMasuk->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Rusak Ringan" {{ $barangMasuk->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                            <option value="Rusak Berat" {{ $barangMasuk->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" value="{{ $barangMasuk->tanggal_masuk }}" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="4">{{ $barangMasuk->keterangan }}</textarea>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
