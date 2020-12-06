@extends("Admin_Folder.BlueprintAdmin")

@section('container-body-page')
<div class="container-form-input-admin-brand" id="inputBrand" style="padding: 0 20%;">
    <style>
        .btn{
            margin-top: 10px;
            background-color: #8F192F;
            color: white;
        }
        .btn:hover{
            background-color: #da2c38;
            font-weight: bold;
        }
    </style>
    <form action="{{ url('Admin/tambahBrand') }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtnama">Nama</label>
                <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama Brand" value="{{ old('txtnama') }}">
                @error('txtnama')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="txtgambar">Gambar</label>
                <input type="text" class="form-control" id="txtgambar" name="txtgambar" placeholder="Link Gambar" value="{{ old('txtgambar') }}">
                @error('txtgambar')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="txtdesc">Deskripsi</label>
                <textarea class="form-control" id="txtdesc" name="txtdesc" placeholder="Deskripsi Brand" value="{{ old('txtdesc') }}"></textarea>
                @error('txtdesc')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-row" style="float: right;">
            <input type="hidden" name="id_brand" id="idbrand">
            <input type="submit" class="btn" id="btnupdBrand" name="btnupdate" value="Update" style="visibility: hidden;">
            <input type="submit" class="btn" name="btnadd" id="btnaddBrand" value="Submit">
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
                    <h1>Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active"><a href="#">Brand</a></li>
                    <li class="breadcrumb-item"><a href="#inputBrand">Input Brand</a></li>
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
                                <h2 class="card-title">Brand</h2>
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
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama Brand</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataBrand)
                                        @foreach ($dataBrand as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr }}</th>
                                                <td><img style="width: 100px;" src="{{ $item->gambar }}" alt=""></td>
                                                <td>{{ $item->nama_brand }}</td>
                                                <td>{{ $item->desc }}</td>
                                                <td><form action="{{ url('Admin/delBrand') }}" method="post">
                                                    @csrf
                                                    <input class="idbrandhidden" type="hidden" name="idbrandhid" value="{{ $item->id_brand }}">
                                                    @if ($item->deleted_at != null)
                                                        <input class="btn btn-primary" style="background-color: #6CBEED;" type="submit" value="Recover" name="btnDel"></td>
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

                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML;
                msg += " ";
                document.getElementById("btnaddBrand").style.visibility = "hidden";
                document.getElementById("btnupdBrand").style.visibility = "visible";
                document.getElementById("txtgambar").value    = rowSelected.cells[1].childNodes[0].getAttribute("src");
                document.getElementById("txtnama").value   = rowSelected.cells[2].innerHTML;
                document.getElementById("txtdesc").value   = rowSelected.cells[3].innerHTML;
                document.getElementById("idbrand").value   = rowSelected.cells[0].innerHTML;
            }
        }
    }
</script>
@endsection
