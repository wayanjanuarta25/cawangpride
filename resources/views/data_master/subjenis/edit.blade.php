@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sub Jenis</h1>
    <form action="{{ route('subjenis.update', $subJenis->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="form-group">
            <label for="nama">Nama Sub Jenis</label>
            <input type="text" name="nama" class="form-control" value="{{ $subJenis->nama }}" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>    
</div>
@endsection
