@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Sub Jenis</h1>

    <form action="{{ route('subjenis.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="jenis_materiil_id" class="form-label">Jenis Materiil</label>
            <select name="jenis_materiil_id" id="jenis_materiil_id" class="form-control">
                <option value="">Pilih Jenis Materiil</option>
                @foreach($jenisMateriil as $jm)
                    <option value="{{ $jm->id }}">{{ $jm->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Sub Jenis</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
