@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Status</h1>

    <form action="{{ route('status.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Status</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
