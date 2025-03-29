@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Gudang</h1>

    <form action="{{ route('gudang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Gudang</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Gudang</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
