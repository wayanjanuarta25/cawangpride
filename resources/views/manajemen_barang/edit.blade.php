@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Barang</h1>
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Jenis Materiil</label>
                <select name="jenis_materiil_id" class="form-control" required>
                    @foreach ($jenisMateriil as $item)
                        <option value="{{ $item->id }}" {{ $barang->jenis_materiil_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Sub Jenis</label>
                <select name="sub_jenis_id" class="form-control" required>
                    @foreach ($subJenis as $item)
                        <option value="{{ $item->id }}" {{ $barang->sub_jenis_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Sub Sub Jenis</label>
                <select name="sub_sub_jenis_id" class="form-control" required>
                    @foreach ($subSubJenis as $item)
                        <option value="{{ $item->id }}" {{ $barang->sub_sub_jenis_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" value="{{ $barang->merk }}" required>
            </div>

            <div class="form-group">
                <label>Tipe</label>
                <input type="text" name="tipe" class="form-control" value="{{ $barang->tipe }}" required>
            </div>

            <div class="form-group">
                <label>No Seri</label>
                <input type="text" name="no_seri" class="form-control" value="{{ $barang->no_seri }}" required>
            </div>

            <div class="form-group">
                <label>Produk</label>
                <input type="text" name="produk" class="form-control" value="{{ $barang->produk }}" required>
            </div>

            <div class="form-group">
                <label>Tahun Produksi</label>
                <input type="number" name="tahun_produksi" class="form-control" value="{{ $barang->tahun_produksi }}"
                    required>
            </div>

            <div class="form-group">
                <label>Tahun Pengadaan</label>
                <input type="number" name="tahun_pengadaan" class="form-control" value="{{ $barang->tahun_pengadaan }}"
                    required>
            </div>

            <div class="form-group">
                <label>Kondisi</label>
                <input type="text" name="kondisi" class="form-control" value="{{ $barang->kondisi }}" required>
            </div>

            <div class="form-group">
                <label>Posisi</label>
                <select name="posisi_id" class="form-control" required>
                    @foreach ($gudang as $item)
                        <option value="{{ $item->id }}" {{ $barang->posisi_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status_id" class="form-control" required>
                    @foreach ($status as $item)
                        <option value="{{ $item->id }}" {{ $barang->status_id == $item->id ? 'selected' : '' }}>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
