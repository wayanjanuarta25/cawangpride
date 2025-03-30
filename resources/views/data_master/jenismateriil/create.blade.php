@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Jenis Materiil</h1>

    <form action="{{ route('jenismateriil.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Jenis Materiil</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
