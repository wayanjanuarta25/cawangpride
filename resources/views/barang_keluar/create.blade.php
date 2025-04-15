@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tambah Materiil Keluar</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a> > 
            <a href="{{ route('barang_keluar.index') }}" class="text-decoration-none fw-bold">Materiil Keluar</a> > 
            <span>Tambah Materiil Keluar</span>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang_keluar.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="barang_id" class="form-label">Nama Barang</label>
                    <select name="barang_id" id="barang_id" class="form-control" required>
                        <option value="">Pilih Barang</option>
                        @foreach ($barang as $item)
                            <option value="{{ $item->id }}" {{ old('barang_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->merk }} ({{ $item->tipe }})
                            </option>
                        @endforeach
                    </select>
                    @error('barang_id')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah') }}" placeholder="Jumlah Barang" required>
                        @error('jumlah')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" id="satuan" class="form-control" value="{{ old('satuan') }}" placeholder="Satuan Barang" required>
                        @error('satuan')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <select name="kondisi" id="kondisi" class="form-control" required>
                            <option value="">Pilih Kondisi</option>
                            <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                            <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
                        </select>
                        @error('kondisi')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" value="{{ old('tanggal_keluar') }}" required>
                        @error('tanggal_keluar')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="penerima" class="form-label">Penerima</label>
                    <input type="text" name="penerima" id="penerima" class="form-control" value="{{ old('penerima') }}" placeholder="Nama Penerima" required>
                    @error('penerima')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="4" class="form-control" placeholder="Keterangan tambahan">{{ old('keterangan') }}</textarea>
                    @error('keterangan')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-end">
                    <button type="submit" name="save_type" value="stay" class="btn btn-primary me-2">
                        <i class="fas fa-save"></i> Simpan
                    </button>

                    <button type="submit" name="save_type" value="back" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan & Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Script Auto Fill --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const barangSelect = document.getElementById('barang_id');

    barangSelect.addEventListener('change', function () {
        const barangId = this.value;

        if (barangId) {
            fetch(`/barang-keluar/${barangId}/info`)
                .then(response => response.json())
                .then(data => {
                    if (!data.error) {
                        document.getElementById('jumlah').value = data.jumlah ?? '';
                        document.getElementById('satuan').value = data.satuan ?? '';
                        document.getElementById('kondisi').value = data.kondisi ?? '';
                        document.getElementById('tanggal_keluar').value = data.tanggal_masuk ?? '';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });
});
</script>
@endpush
@endsection
