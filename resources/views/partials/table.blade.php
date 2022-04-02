
    <h3 class="text-center">Data Table  Transaksi</h3>
<table class="table table-striped table-hover" border="1">
    <tr>
        <th>No. Transaksi</th>
        <th>Tanggal Transaksi</th>
        <th>id user</th>
        <th>id paket cuci</th>
        <th>total harga</th>
        <th>pembayaran</th>
        <th>kembalian</th>
        <th>Nama Paket tambahan</th>
    </tr>
        @foreach ($alltransaksi as $transaksi)
        <tr>
            <td>{{ $transaksi->id }}</td>
            <td>{{ $transaksi->tgltransaksi }}</td>
            <td>{{ $transaksi->user_id }}</td>
            <td>{{ $transaksi->paketcuci_id }}</td>
            <td>{{ $transaksi->totalharga }}</td>
            <td>{{ $transaksi->pembayaran }}</td>
            <td>{{ $transaksi->kembalian }}</td>
            <td>{{ $transaksi->namapakettambahan }}</td>
        </tr>
        @endforeach                  
</table>