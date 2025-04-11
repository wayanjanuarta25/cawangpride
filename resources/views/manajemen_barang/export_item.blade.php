<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Materiil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }
        .header-left {
            text-align: left;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .header-box {
            display: inline-block;
            text-align: center;
            line-height: 1.3;
        }
        .underline-text {
            display: inline-block;
            border-bottom: 1px solid black;
            padding-bottom: 2px;
        }
        .title-center {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 1.2;
            margin-top: 10px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 10px;
            vertical-align: top;
            font-weight: bold;
            font-size: 12px;
            border: none;
        }
        th {
            text-align: left;
        }
        .table-no {
            width: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Header kiri tapi text di dalamnya rata tengah -->
    <div class="header-left">
        <div class="header-box">
            <div>BADAN INTELIJEN STRATEGIS TNI</div>
            <div class="underline-text">SATUAN INTELIJEN TEKNIK</div>
        </div>
    </div>

    <!-- Judul Tengah -->
    <div class="title-center">
        <p>TABEL DATA MATERIIL PADA SISTEM INFORMASI MANAJEMEN MATERIIL</p>
        <p>SATBEKHARSTALSATINTELTEK BAIS TNI</p>
    </div>

    <!-- Tabel Data -->
    <table cellpadding="5" cellspacing="0">
        <tbody>
            <tr>
                <td class="table-no">1.</td>
                <th>Jenis Materiil</th>
                <td>: {{ $barang->jenisMateriil->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td class="table-no">2.</td>
                <th>Sub Jenis</th>
                <td>: {{ $barang->subJenis->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td class="table-no">3.</td>
                <th>Sub Sub Jenis</th>
                <td>: {{ $barang->subSubJenis->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td class="table-no">4.</td>
                <th>Merk</th>
                <td>: {{ $barang->merk }}</td>
            </tr>
            <tr>
                <td class="table-no">5.</td>
                <th>Tipe</th>
                <td>: {{ $barang->tipe }}</td>
            </tr>
            <tr>
                <td class="table-no">6.</td>
                <th>No Seri</th>
                <td>: {{ $barang->no_seri }}</td>
            </tr>
            <tr>
                <td class="table-no">7.</td>
                <th>Produk (Negara)</th>
                <td>: {{ $barang->produk }}</td>
            </tr>
            <tr>
                <td class="table-no">8.</td>
                <th>Tahun Produksi</th>
                <td>: {{ $barang->tahun_produksi }}</td>
            </tr>
            <tr>
                <td class="table-no">9.</td>
                <th>Tahun Pengadaan</th>
                <td>: {{ $barang->tahun_pengadaan }}</td>
            </tr>
            <tr>
                <td class="table-no">10.</td>
                <th>Tahun Pakai</th>
                <td>: {{ $barang->tahun_pakai ?? '-' }}</td>
            </tr>
            <tr>
                <td class="table-no">11.</td>
                <th>Masa Pakai</th>
                <td>: {{ $barang->masa_pakai ?? '-' }} Tahun</td>
            </tr>
            <tr>
                <td class="table-no">12.</td>
                <th>Kondisi</th>
                <td>: {{ $barang->kondisi }}</td>
            </tr>
            <tr>
                <td class="table-no">13.</td>
                <th>Posisi (Gudang)</th>
                <td>: {{ $barang->gudang->nama ?? '-' }}</td>
            </tr>
            <tr>
                <td class="table-no">14.</td>
                <th>Status</th>
                <td>: {{ $barang->status->nama ?? '-' }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
