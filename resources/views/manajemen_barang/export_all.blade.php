<h2>Data Semua Barang</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Materiil</th>
            <th>Sub Jenis</th>
            <th>Sub Sub Jenis</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>No Seri</th>
            <th>Produk (Negara)</th>
            <th>Kondisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $key => $item)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->jenisMateriil->nama ?? '-' }}</td>
            <td>{{ $item->subJenis->nama ?? '-' }}</td>
            <td>{{ $item->subSubJenis->nama ?? '-' }}</td>
            <td>{{ $item->merk }}</td>
            <td>{{ $item->tipe }}</td>
            <td>{{ $item->no_seri }}</td>
            <td>{{ $item->produk }}</td>
            <td>{{ $item->kondisi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
