@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Gudang</h1>

    <form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Gudang</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $gudang->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Gudang</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $gudang->lokasi }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('gudang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
