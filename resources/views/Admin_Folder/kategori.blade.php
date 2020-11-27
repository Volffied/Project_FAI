@extends("Admin_Folder.BlueprintAdmin")

@section('container-body-page')
<div class="container-form-input-admin-kategori" id="inputKategori">
    <form action="{{ url('Admin/tambahKategori') }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="txtnama">Nama</label>
                <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama Kategori">
                @error('txtnama')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-row" style="float: right;">
            <input type="submit" class="btn btn-primary" id="btnupdKategori" name="btnupdate" value="Update" style="visibility: hidden;">
            <input type="submit" class="btn btn-primary" name="btnadd" id="btnaddKategori" value="Submit">
            <input type="hidden" name="id_kategori" id="idkategori">
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
                    <h1>Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Kategori</li>
                    <li class="breadcrumb-item "><a href="#">List Kategori</a></li>
                    <li class="breadcrumb-item"><a href="#inputKategori">Input Kategori</a></li>
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
                            <div class="card-header">
                                <h2 class="card-title">Kategori</h2>
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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataKat)
                                        @foreach ($dataKat as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td><form action="{{ url('Admin/delkategori') }}" method="post">
                                                        @csrf
                                                        <input class="idkategorihidden" type="hidden" name="idkategorihid" value="{{ $item->id }}">
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
                        </div>
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

                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML;
                msg += " ";
                document.getElementById("btnaddKategori").style.visibility = "hidden";
                document.getElementById("btnupdKategori").style.visibility = "visible";
                document.getElementById("txtnama").value    = rowSelected.cells[1].innerHTML;
                document.getElementById("idkategori").value   = rowSelected.cells[0].innerHTML;
            }
        }
    }
</script>
@endsection
