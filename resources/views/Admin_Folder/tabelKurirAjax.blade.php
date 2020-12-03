@isset($daftarPenjualan)
    @foreach ($daftarPenjualan as $item)
    <tr>
        <th scope="row">{{ $item->id_horder }}</th>
        <td>{{ $item->tanggal_trans }}</td>
        <td>{{ $item->nama_cust }}</td>
        <td>{{ $item->alamat_cust }}</td>
        <td>{{ $item->grandtotal }}</td>
        @if ($item->estimasi_waktu == null)
            <td><i>NONE</i></td>
        @else
            <td>{{ $item->estimasi_waktu }}</td>
        @endif
        @if ($item->tanggal_pengiriman == null)
            <td><i>NONE</i></td>
        @else
            <td>{{ $item->tanggal_pengiriman }}</td>
        @endif
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
<script>
    highlight_row();
    function highlight_row() {
        var table = document.getElementById('example2');
        var cells = table.getElementsByTagName('td');

        for (var i = 0; i < cells.length; i++) {
            var cell = cells[i];
            cell.onclick = function () {
                document.getElementById("btnupdhorder").disabled = false;
                var rowId = this.parentNode.rowIndex;
                var rowsNotSelected = table.getElementsByTagName('tr');
                for (var row = 0; row < rowsNotSelected.length; row++) {
                    rowsNotSelected[row].classList.remove('selected');
                }
                var rowSelected = table.getElementsByTagName('tr')[rowId];
                rowSelected.className += " selected";

                console.log(rowSelected.cells);
                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML+" "+rowSelected.cells[4].innerHTML+" "+rowSelected.cells[5].innerHTML+" "+rowSelected.cells[6].innerHTML+" "+rowSelected.cells[7].innerHTML;
                msg += " ";
                document.getElementById("txtId").value   = rowSelected.cells[0].innerHTML;
            }
        }
    }
</script>
