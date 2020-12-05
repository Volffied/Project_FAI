@extends("Admin_Folder.BlueprintMaster")
@section('container-body-page')
<div class="container-form-input-admin-pegawai" style="padding: 0 20%;">
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
    <form action="{{ url('Master/tambahPegawai') }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtnama">Nama</label>
                <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama">
                @error('txtnama')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="txtemail">Email</label>
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Email">
                @error('txtemail')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtpass">Password</label>
                <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Password">
                @error('txtpass')
                <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="txtconpass">Confirm Password</label>
                <input type="password" class="form-control" id="txtconpass" name="txtpass_confirmation" placeholder="Confirm Password">
                @error('txtpass_confirmation')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtphone">No Telepon</label>
                <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="nomer telepon">
                @error('txtphone')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="cbpilijenispegawai">Jenis Pegawai :</label>
                <select name="cbpilijenispegawai" id="cbpilijenispegawai" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">Kurir</option>
                    <option value="3">Customer Service</option>
                </select>
            </div>
        </div>
        <div class="form-row" style="float: right;">
            <input type="hidden" name="id_pegawai" id="idpegawai">
            <input type="submit" class="btn" id="btnupdPegawai" name="btnupdate" value="Update" style="visibility: hidden;">
            <input type="submit" class="btn" name="btnadd" id="btnaddPegawai" value="Submit">
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
                    <h1>Pegawai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Master') }}">Home</a></li>
                    <li class="breadcrumb-item">Master</li>
                    <li class="breadcrumb-item active">Pegawai</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Pegawai</h3>
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
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No. Telp</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    @isset($daftarPegawai)
                                    <tbody>
                                        @foreach ($daftarPegawai as $item)
                                        <tr>
                                            <th scope="row">{{ $ctr }}</th>
                                            <td>{{ $item->nama."-".$item->id }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->notlp }}</td>
                                            @if ($item->jenis == 1)
                                                <td>Admin</td>
                                            @elseif($item->jenis == 2)
                                                <td>Kurir</td>
                                            @elseif($item->jenis == 3)
                                                <td>Customer Service</td>
                                            @endif
                                            <td><form action="{{ url('Master/delPegawai') }}" method="post">
                                                @csrf
                                                <input class="idpegawaihidden" type="hidden" name="idpegawaihid" value="{{ $item->id }}">
                                                @if ($item->deleted_at != null)
                                                    <input class="btn" style="background-color: #6CBEED;" type="submit" value="Unbanned" name="btnDel"></td>
                                                @else
                                                    <input class="btn btn-danger" type="submit" value="Banned" name="btnDel"></td>
                                                @endif
                                            </form></td>
                                        </tr>
                                        <?php
                                            $ctr = $ctr + 1;
                                        ?>
                                        @endforeach
                                    </tbody>
                                    @endisset
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

                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML+" "+rowSelected.cells[4].innerHTML;
                msg += " ";
                document.getElementById("btnaddPegawai").style.visibility = "hidden";
                document.getElementById("btnupdPegawai").style.visibility = "visible";
                document.getElementById("txtpass").disabled = true;
                document.getElementById("txtconpass").disabled = true;
                document.getElementById("txtemail").value    = rowSelected.cells[2].innerHTML;
                document.getElementById("txtnama").value   = rowSelected.cells[1].innerHTML.substring(0,rowSelected.cells[1].innerHTML.indexOf("-"));
                document.getElementById("txtphone").value   = rowSelected.cells[3].innerHTML;
                if(rowSelected.cells[4].innerHTML == "Admin"){
                    document.getElementById("cbpilijenispegawai").value   =  1;
                }else if(rowSelected.cells[4].innerHTML == "Kurir"){
                    document.getElementById("cbpilijenispegawai").value   =  2;
                }else if(rowSelected.cells[4].innerHTML == "Customer Service"){
                    document.getElementById("cbpilijenispegawai").value   =  3;
                }
                document.getElementById("idpegawai").value   = rowSelected.cells[1].innerHTML.substring(rowSelected.cells[1].innerHTML.indexOf("-")+1,rowSelected.cells[1].length);
            }
        }
    }
</script>
@endsection
