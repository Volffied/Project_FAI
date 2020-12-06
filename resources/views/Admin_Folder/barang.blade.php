@extends("Admin_Folder.BlueprintAdmin")

@section('table-master')
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Barang</li>
                    <li class="breadcrumb-item"><a href="#listBarang">List Barang</a></li>
                    <li class="breadcrumb-item"><a href="#inputBarang">Input Barang</a></li>
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
                                <h2 class="card-title">Barang</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" id="listBarang">
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">kategori</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataBarang)
                                        @foreach ($dataBarang as $item)
                                            <tr>
                                                <td scope="row">{{ $ctr }} </td>
                                                <td><img src="{{ $item->gambar }}" alt="" style="width: 80px; height: 80px;"></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->id_kat." - ".$item->nama_kat }}</td>
                                                <td>{{ $item->id_brand." - ".$item->nama_brand }}</td>
                                                <td>Rp. {{ $item->harga }},00</td>
                                                <td>{{ $item->stok }}</td>
                                                <td><form action="{{ url('Admin/delBarang') }}" method="post">
                                                        @csrf
                                                        <input class="idbaranghidden" type="hidden" name="idbaranghid" value="{{ $item->id }}">
                                                        @if ($item->deleted_at != null)
                                                            <input class="btn btn-primary" style="background-color: #6CBEED;" type="submit" value="Recover" name="btnDel"></td>
                                                        @else
                                                            <input class="btn btn-danger" type="submit" value="Delete" name="btnDel"></td>
                                                        @endif
                                                    </form>
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
@endsection

@section('container-body-page')
    <div class="container-form-input-admin-barang" id="inputBarang" style="padding: 0 20%;">
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
        <form action="{{ url('Admin/tambahBarang') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtnama">Nama</label>
                    <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="nama" value="{{ old('txtnama') }}">
                    @error('txtnama')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="txtharga">Harga</label>
                    <input type="text" class="form-control" id="txtharga" name="txtharga" placeholder="Harga" value="{{ old('txtharga') }}">
                    @error('txtharga')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtstok">Stok</label>
                    <input type="text" class="form-control" id="txtstok" name="txtstok" placeholder="stok" value="{{ old('txtstok') }}">
                    @error('txtstok')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="txtgambar">Link Gambar</label>
                    <input type="text" class="form-control" id="txtgambar" name="txtgambar" placeholder="Gambar" value="{{ old('txtgambar') }}">
                    @error('txtgambar')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cbpilihkategori">Kategori :</label>
                    <select name="cbpilihkategori" id="cbpilihkategori" class="form-control">
                        @isset($dataKat)
                            @foreach ($dataKat as $item)
                                <option value="{{ $item->id_kat }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cbpilihbrand">Brand :</label>
                    <select name="cbpilihbrand" id="cbpilihbrand" class="form-control">
                        @isset($dataBrand)
                            @foreach ($dataBrand as $item)
                                <option value="{{ $item->id_brand }}">{{ $item->nama_brand }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
                <input type="hidden" name="id_barang" id="idbarang">
            </div>
            <div class="form-row" style="float: right;">
                <input type="submit" class="btn" id="btnupdBarang" name="btnupdate" value="Update">
                <input type="submit" class="btn" id="btnaddBarang" name="btnadd" value="Submit">
            </div>
        </form>
    </div>
    <script>
        highlight_row() ;
        document.getElementById("btnaddBarang").style.visibility = "visible";
        document.getElementById("btnupdBarang").style.visibility = "hidden";
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

                    msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML+" "+rowSelected.cells[4].innerHTML+" "+rowSelected.cells[5].innerHTML+" "+rowSelected.cells[6].innerHTML;
                    msg += " ";
                    document.getElementById("btnaddBarang").style.visibility = "hidden";
                    document.getElementById("btnupdBarang").style.visibility = "visible";
                    document.getElementById("txtgambar").value    = rowSelected.cells[1].childNodes[0].getAttribute("src");
                    document.getElementById("txtnama").value   = rowSelected.cells[2].innerHTML;
                    document.getElementById("cbpilihkategori").value   = rowSelected.cells[3].innerHTML.substring(0,rowSelected.cells[3].innerHTML.indexOf(" "));
                    document.getElementById("cbpilihbrand").value   = rowSelected.cells[4].innerHTML.substring(0,rowSelected.cells[4].innerHTML.indexOf(" "));
                    document.getElementById("txtharga").value   = rowSelected.cells[5].innerHTML.substring(3,rowSelected.cells[5].innerHTML.indexOf(","));
                    document.getElementById("txtstok").value   = rowSelected.cells[6].innerHTML;
                    document.getElementById("idbarang").value   = rowSelected.cells[0].innerHTML;
                }
            }
        }
    </script>
@endsection
