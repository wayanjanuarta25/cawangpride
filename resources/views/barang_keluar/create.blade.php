@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang Keluar</h1>
    <form action="{{ route('barang_keluar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang_id" class="form-control" required>
                <option value="">Pilih Barang</option>
                @foreach ($barang as $item)
                    <option value="{{ $item->id }}">{{ $item->merk }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" name="tanggal_keluar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Penerima</label>
            <input type="text" name="penerima" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
