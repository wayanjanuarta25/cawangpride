@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Edit Materiil Keluar</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a> > 
            <a href="{{ route('barang_keluar.index') }}" class="text-decoration-none fw-bold">Materiil Keluar</a> > 
            <span>Edit Materiil Keluar</span>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang_keluar.update', $barangKeluar->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="barang_id" class="form-label">Nama Barang</label>
                    <select name="barang_id" id="barang_id" class="form-control" required>
                        <option value="">Pilih Barang</option>
                        @foreach ($barang as $item)
                            <option value="{{ $item->id }}" {{ $barangKeluar->barang_id == $item->id ? 'selected' : '' }}>
                                {{ $item->merk }} ({{ $item->tipe }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" 
                            value="{{ $barangKeluar->jumlah }}" placeholder="Masukkan Jumlah Barang Keluar" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" id="satuan" class="form-control" 
                            value="{{ $barangKeluar->satuan }}" placeholder="Masukkan Satuan Barang Keluar" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" 
                            value="{{ $barangKeluar->tanggal_keluar }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="penerima" class="form-label">Penerima</label>
                        <input type="text" name="penerima" id="penerima" class="form-control" 
                            value="{{ $barangKeluar->penerima }}" placeholder="Masukkan Nama Penerima" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="4" class="form-control" placeholder="Masukkan Keterangan">{{ $barangKeluar->keterangan }}</textarea>
                </div>

                <div class="text-end">
                    <button type="submit" name="save_type" value="stay" class="btn btn-primary me-2">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                    <button type="submit" name="save_type" value="back" class="btn btn-success me-2">
                        <i class="fas fa-save"></i> Simpan & Kembali
                    </button>
                    <a href="{{ route('barang_keluar.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
