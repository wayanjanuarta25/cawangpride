@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manajemen Sub Sub Jenis</h1>
        <a href="{{ route('subsubjenis.create') }}" class="btn btn-primary mb-3">Tambah Sub Sub Jenis</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Materiil</th>
                    <th>Sub Jenis</th>
                    <th>Sub Sub Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subSubJenis as $key => $item)
                    <tr>
                        <td>{{ ($subSubJenis->currentPage() - 1) * $subSubJenis->perPage() + $loop->iteration }}</td>
                        <td>{{ optional($item->subJenis->jenisMateriil)->nama ?? '-' }}</td>
                        <td>{{ optional($item->subJenis)->nama ?? '-' }}</td>

                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('subsubjenis.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('subsubjenis.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Navigasi Pagination -->
        <div class="d-flex justify-content-center">
            {{ $subSubJenis->links() }}
        </div>
    </div>
@endsection
