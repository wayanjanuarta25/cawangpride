@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Sub Sub Jenis</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('subsubjenis.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jenis_materiil" class="form-label">Jenis Materiil</label>
                <select id="jenis_materiil" class="form-control">
                    <option value="">Pilih Jenis Materiil</option>
                    @foreach ($subJenis as $sj)
                        <option value="{{ $sj->jenisMateriil->id }}">{{ $sj->jenisMateriil->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="sub_jenis_id" class="form-label">Sub Jenis</label>
                <select name="sub_jenis_id" id="sub_jenis_id" class="form-control">
                    <option value="">Pilih Sub Jenis</option>
                    @foreach ($subJenis as $sj)
                        <option value="{{ $sj->id }}" data-jenis="{{ $sj->jenis_materiil_id }}">{{ $sj->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Sub Sub Jenis</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <script>
            document.getElementById('jenis_materiil').addEventListener('change', function() {
                var jenisID = this.value;
                var subJenisOptions = document.querySelectorAll('#sub_jenis_id option');

                subJenisOptions.forEach(option => {
                    if (option.dataset.jenis == jenisID || option.value == '') {
                        option.style.display = 'block';
                    } else {
                        option.style.display = 'none';
                    }
                });
            });
        </script>

    </div>
@endsection
