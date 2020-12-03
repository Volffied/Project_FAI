@isset($daftarPenjualan)
    @foreach ($daftarPenjualan as $item)
    <tr>
        <th scope="row">{{ $item->id_horder }}</th>
        <td>{{ $item->tanggal_trans }}</td>
        @if ($item->tanggal_pengiriman == null)
            <td><i>NONE</i></td>
        @else
            <td>{{ $item->tanggal_pengiriman }}</td>
        @endif
        <td>{{ $item->subtotal }}</td>
        <td>{{ $item->grandtotal }}</td>
        @if ($item->estimasi_waktu == null)
            <td><i>NONE</i></td>
        @else
            <td>{{ $item->estimasi_waktu }}</td>
        @endif
        <td>{{ $item->metode_pembayaran }}</td>
        <td>{{ $item->kode_customer }}</td>
        @if ($item->kode_pegawai == null)
            <td><i>NONE</i></td>
        @else
            <td>{{ $item->kode_pegawai }}</td>
        @endif
        <td>{{ $item->kode_promo }}</td>
        @if ($item->status_order == 1)
            <td>Menunggu Konfirmasi</td>
        @elseif($item->status_order == 2)
            <td>Sedang Dikirim</td>
        @elseif($item->status_order == 3)
            <td>Terkirim</td>
        @endif
    </tr>
    @endforeach
@endisset
