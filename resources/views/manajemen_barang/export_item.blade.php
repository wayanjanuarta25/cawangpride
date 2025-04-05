<h2>Detail Barang</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
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
        <th>Kondisi</th>
        <td>{{ $barang->kondisi }}</td>
    </tr>
</table>
