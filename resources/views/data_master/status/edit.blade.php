@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Status</h1>

    <form action="{{ route('status.update', $status->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Status</label>
            <input type="text" name="nama" class="form-control" value="{{ $status->nama }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
