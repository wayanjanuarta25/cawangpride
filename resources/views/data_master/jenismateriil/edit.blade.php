@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Jenis Materiil</h1>

    <form action="{{ route('jenismateriil.update', $jenismateriil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Jenis Materiil</label>
            <input type="text" name="nama" class="form-control" value="{{ $jenismateriil->nama }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
