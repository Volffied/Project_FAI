@extends("Admin_Folder.BlueprintKurir")
@section('container-body-page')
    <div class="container-form-input-admin-barang" id="inputBarang">
        <form action="{{ url('Kurir/updateStatKirim') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtId">ID</label>
                    <input type="text" class="form-control" id="txtId" name="txtId" placeholder="ID" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtwaktu">Estimasi Waktu</label>
                    <input type="number" class="form-control" id="txtwaktu" name="txtwaktu" placeholder="Estimasi Waktu">
                    @error('txtwaktu')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <!-- <div class="form-row" style="float: left;"> -->
            <div class="form-group col-md-4">
                <img id="previewHolder" src="{{ asset('images/invoice_png_kurir.png') }}" alt="Uploaded Image Preview Holder" width="200px" height="200px">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="imgupload"
                        aria-describedby="inputGroupFileAddon01" disabled>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    @error('imgupload')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row" style="float: right;">
                <input type="submit" class="btn btn-primary" id="btnupdhorder" name="btnupd" value="Submit" disabled>
            </div>

        </form>
    </div>
    <script>
        $(document).ready(function(){
            setInterval(updateTabel,1000);
            highlight_row() ;
        });
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
                        rowsNotSelected[row].style.backgroundColor = "";
                        rowsNotSelected[row].classList.remove('selected');
                    }
                    var rowSelected = table.getElementsByTagName('tr')[rowId];
                    rowSelected.className += " selected";

                    msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML+" "+rowSelected.cells[4].innerHTML+" "+rowSelected.cells[5].innerHTML+" "+rowSelected.cells[6].innerHTML+" "+rowSelected.cells[7].innerHTML+" "+rowSelected.cells[8].innerHTML+" "+rowSelected.cells[9].innerHTML;
                    msg += " ";
                    document.getElementById("txtId").value   = rowSelected.cells[0].innerHTML;
                }
            }
        }
        function updateTabel() {
            $.ajax({
                url: "/Kurir/updateTabelKurir",
                type: "GET",
                data:{},
                success:function(response){
                    $(".tabelKurir").html(response);
                }
            })
        }
        //preview image
        function readUrl(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#previewHolder').attr('src',e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#inputGroupFile01").change(function(){
            readUrl(this);
        })
    </script>
@endsection

@section('table-master')
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pengiriman Barang</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Penjualan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-striped">
                                    <style>
                                        .thead{
                                            background-color: #8F192F !important;
                                            color:white;
                                        }

                                        .table td{
                                            padding-left: .75rem;
                                            vertical-align: middle;
                                        }
                                    </style>
                                    <thead class="thead">
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Tanggal Pengiriman</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Grandtotal</th>
                                        <th scope="col">Estimasi</th>
                                        <th scope="col">Metode</th>
                                        <th scope="col">Kode Customer</th>
                                        <th scope="col">Kode Pegawai</th>
                                        <th scope="col">Kode Promo</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody class="tabelKurir">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
{{-- @isset($daftarPenjualan)
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
        {{-- <td><form action="{{ url('Kurir/changeStat') }}" method="post">
            @csrf
            <input class="idpromohidden" type="hidden" name="idpromohid" value="{{ $item->id_horder }}">
            @if ($item->status_order == 0)
                <input class="btn btn-warning" id="btnkirim" type="submit" value="Confirm" name="btnDel"></td>
            @elseif($item->status_order == 1)
                <input class="btn btn-secondary" id="btnselesai" type="submit" value="Sent" name="btnDel"></td>
            @elseif($item->status_order == 2)
                <span style="color: lightgreen">Terkirim</span></td>
            @endif
         </td>
    </tr>
    @endforeach
@endisset --}}
