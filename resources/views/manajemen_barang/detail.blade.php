@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Title and Back Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Detail Barang</h1>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Card for Detail -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Informasi Barang</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th width="30%">Foto Materiil</th>
                            <td>
                                @if($barang->foto)
                                    <img src="{{ asset('uploads/barang/' . $barang->foto) }}" alt="Foto Barang" class="img-fluid" style="max-height: 300px;">
                                @endif
                        </td>
                        </tr>
                        <tr>
                            <th>Jenis Materiil</th>
                            <td>{{ $barang->jenisMateriil->nama ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Sub Jenis</th>
                            <td>{{ $barang->subJenis->nama ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Sub Sub Jenis</th>
                            <td>{{ $barang->subSubJenis->nama ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Merk</th>
                            <td>{{ $barang->merk }}</td>
                        </tr>
                        <tr>
                            <th>Tipe</th>
                            <td>{{ $barang->tipe }}</td>
                        </tr>
                        <tr>
                            <th>No Seri</th>
                            <td>{{ $barang->no_seri }}</td>
                        </tr>
                        <tr>
                            <th>Produk (Negara)</th>
                            <td>{{ $barang->produk }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Produksi</th>
                            <td>{{ $barang->tahun_produksi }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Pengadaan</th>
                            <td>{{ $barang->tahun_pengadaan }}</td>
                        </tr>
                        <tr>
                            <th>Tahun Pakai</th>
                            <td>{{ $barang->tahun_pakai ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Masa Pakai</th>
                            <td>{{ $barang->masa_pakai ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Kondisi</th>
                            <td>{{ $barang->kondisi }}</td>
                        </tr>
                        <tr>
                            <th>Posisi (Gudang)</th>
                            <td>{{ $barang->gudang->nama ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $barang->status->nama ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
