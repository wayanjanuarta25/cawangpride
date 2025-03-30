@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sub Sub Jenis</h1>

    <form action="{{ route('subsubjenis.update', $subSubJenis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Sub Sub Jenis</label>
            <input type="text" name="nama" class="form-control" value="{{ $subSubJenis->nama }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
