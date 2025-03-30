@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Jenis Materiil</label>
            <select name="jenis_materiil_id" id="jenis_materiil" class="form-control" required>
                <option value="">Pilih Jenis Materiil</option>
                @foreach ($jenisMateriil as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Sub Jenis</label>
            <select name="sub_jenis_id" id="sub_jenis" class="form-control" required>
                <option value="">Pilih Sub Jenis</option>
            </select>
        </div>

        <div class="form-group">
            <label>Sub Sub Jenis</label>
            <select name="sub_sub_jenis_id" id="sub_sub_jenis" class="form-control" required>
                <option value="">Pilih Sub Sub Jenis</option>
            </select>
        </div>

        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tipe</label>
            <input type="text" name="tipe" class="form-control" required>
        </div>

        <div class="form-group">
            <label>No Seri</label>
            <input type="text" name="no_seri" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Produk (Negara)</label>
            <input type="text" name="produk" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tahun Produksi</label>
            <input type="number" name="tahun_produksi" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tahun Pengadaan</label>
            <input type="number" name="tahun_pengadaan" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Tahun Pakai</label>
            <input type="number" name="tahun_pakai" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Masa Pakai</label>
            <input type="text" name="masa_pakai" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Kondisi</label>
            <input type="text" name="kondisi" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Posisi (Gudang)</label>
            <select name="posisi_id" class="form-control" required>
                <option value="">Pilih Gudang</option>
                @foreach ($gudang as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status_id" class="form-control" required>
                <option value="">Pilih Status</option>
                @foreach ($status as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

{{-- JavaScript untuk AJAX --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('jenis_materiil').addEventListener('change', function() {
            let jenisId = this.value;
            let subJenisDropdown = document.getElementById('sub_jenis');
            let subSubJenisDropdown = document.getElementById('sub_sub_jenis');

            subJenisDropdown.innerHTML = '<option value="">Pilih Sub Jenis</option>';
            subSubJenisDropdown.innerHTML = '<option value="">Pilih Sub Sub Jenis</option>';

            if (jenisId) {
                fetch(`/get-sub-jenis/${jenisId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(item => {
                            subJenisDropdown.innerHTML += `<option value="${item.id}">${item.nama}</option>`;
                        });
                    });
            }
        });

        document.getElementById('sub_jenis').addEventListener('change', function() {
            let subJenisId = this.value;
            let subSubJenisDropdown = document.getElementById('sub_sub_jenis');
            subSubJenisDropdown.innerHTML = '<option value="">Pilih Sub Sub Jenis</option>';

            if (subJenisId) {
                fetch(`/get-sub-sub-jenis/${subJenisId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(item => {
                            subSubJenisDropdown.innerHTML += `<option value="${item.id}">${item.nama}</option>`;
                        });
                    });
            }
        });
    });
</script>

@endsection
