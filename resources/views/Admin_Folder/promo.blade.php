@extends("Admin_Folder.BlueprintAdmin")
@section('container-body-page')
<div class="container-form-input-admin-promo" id="inputPromo">
<form action="{{ url('Admin/promoRoute') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtnama">Nama</label>
            <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama">
            @error('txtnama')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="txtnama">Potongan</label>
            <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Potongan">
            @error('diskon')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tglawal">Tanggal Awal</label>
            <input type="date" class="form-control" id="tglawal" name="tglawal" placeholder="Tanggal Awal">
            @error('tglawal')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="txtpotongan">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tglakhir" name="tglakhir" placeholder="Tanggal Expired">
            @error('tglakhir')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtnama">Kode Voucher</label>
            <input type="text" class="form-control" id="txtvoucher" name="txtvoucher" placeholder="Kode Voucher">
            @error('txtvoucher')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row" style="float: right;">
        <input type="hidden" name="id_promo" id="idpromo">
        <input type="submit" class="btn btn-primary" id="btnupdPromo" name="btnupdates" value="Update" style="visibility: hidden;">
        <input type="submit" class="btn btn-primary" id="btnaddPromo" name="btnadd"  value="Submit">
    </div>
</form>
</div>
@endsection

@section('table-master')
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>Promo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Promo</li>
                    <li class="breadcrumb-item "><a href="#">List Promo</a></li>
                    <li class="breadcrumb-item"><a href="#inputPromo">Input Promo</a></li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        <?php
            $ctr = 1;
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <style>
                    #example2_wrapper .row:last-child{
                        display: none;
                    }
                </style>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" id="listPromo">
                                <h2 class="card-title">Promo</h2>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">Potongan</th>
                                            <th scope="col">Kode Voucher</th>
                                            <th scope="col">Tanggal Awal</th>
                                            <th scope="col">Tanggal Akhir</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataPromo)
                                        @foreach ($dataPromo as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->potongan }} %</td>
                                                <td>{{ $item->voucher }}</td>
                                                <td>{{ $item->tanggal_awal }}</td>
                                                <td>{{ $item->tanggal_akhir }}</td>
                                                <td><form action="{{ url('Admin/delPromo') }}" method="post">
                                                    @csrf
                                                    <input class="idpromohidden" type="hidden" name="idpromohid" value="{{ $item->id_promo }}">
                                                    @if ($item->deleted_at != null)
                                                        <input class="btn btn-primary" type="submit" value="Recover" name="btnDel"></td>
                                                    @else
                                                        <input class="btn btn-danger" type="submit" value="Delete" name="btnDel"></td>
                                                    @endif
                                                </form></td>
                                            </tr>
                                            <?php
                                                $ctr = $ctr + 1;
                                            ?>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    highlight_row() ;
    function highlight_row() {
        var table = document.getElementById('example2');
        var cells = table.getElementsByTagName('td');


        for (var i = 0; i < cells.length; i++) {
            var cell = cells[i];
            cell.onclick = function () {
                var rowId = this.parentNode.rowIndex;

                var rowsNotSelected = table.getElementsByTagName('tr');
                for (var row = 0; row < rowsNotSelected.length; row++) {
                    rowsNotSelected[row].style.backgroundColor = "";
                    rowsNotSelected[row].classList.remove('selected');
                }
                var rowSelected = table.getElementsByTagName('tr')[rowId];
                rowSelected.className += " selected";

                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML+" "+rowSelected.cells[4].innerHTML+" "+rowSelected.cells[5].innerHTML;
                msg += " ";
                document.getElementById("btnaddPromo").style.visibility = "hidden";
                document.getElementById("btnupdPromo").style.visibility = "visible";
                document.getElementById("txtnama").value    = rowSelected.cells[1].innerHTML;
                document.getElementById("diskon").value    = rowSelected.cells[2].innerHTML.substring(0,rowSelected.cells[2].innerHTML.indexOf(" "));
                document.getElementById("txtvoucher").value    = rowSelected.cells[3].innerHTML;
                document.getElementById("tglawal").value    = rowSelected.cells[4].innerHTML;
                document.getElementById("tglakhir").value    = rowSelected.cells[5].innerHTML;
                document.getElementById("idpromo").value   = rowSelected.cells[0].innerHTML;
            }
        }
    }
</script>
@endsection
