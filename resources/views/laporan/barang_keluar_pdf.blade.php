<h2>Laporan Barang Keluar</h2>
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Tanggal Keluar</th>
            <th>Penerima</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangKeluar as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->barang->merk ?? '-' }} ({{ $item->barang->tipe ?? '-' }})</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->satuan }}</td>
                <td>{{ $item->tanggal_keluar }}</td>
                <td>{{ $item->penerima }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
