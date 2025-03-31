<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang Masuk</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Barang Masuk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Kondisi</th>
                <th>Tanggal Masuk</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangMasuk as $key => $barang)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $barang->barang->merk }} ({{ $barang->barang->tipe }})</td>
                    <td>{{ $barang->jumlah }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>{{ $barang->kondisi }}</td>
                    <td>{{ $barang->tanggal_masuk }}</td>
                    <td>{{ $barang->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
