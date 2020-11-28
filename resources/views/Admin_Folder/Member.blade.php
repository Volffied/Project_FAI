@extends("Admin_Folder.BlueprintAdmin")
@section('container-body-page')
<div class="container-form-input-admin-member" id="inputMember">
    <form action="{{ url('Admin/tambahJenisMember') }}" method="post">
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
                <label for="txtpoin">Minimal Poin</label>
                <input type="number" class="form-control" id="txtpoin" name="txtpoin" placeholder="Poin">
                @error('txtpoin')
                    <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="txtpotongan">Potongan</label>
            <input type="number" class="form-control" id="txtpotongan" name="txtpotongan" placeholder="Potongan">
            @error('txtpotongan')
                <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
            @enderror
        </div>
        <div class="form-row" style="float: right;">
            <input type="hidden" name="id_jenis_member" id="idjenismember">
            <input type="submit" class="btn btn-primary" id="btnupdMember" name="btnupdate" value="Update" style="visibility: hidden;">
            <input type="submit" class="btn btn-primary" name="btnadd" id="btnaddMember" value="Submit">
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
                    <h1>Member</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Member</li>
                    <li class="breadcrumb-item"><a href="#listMember">List Member</a></li>
                    <li class="breadcrumb-item"><a href="#inputMember">Input Member</a></li>
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
                            <div class="card-header" id="listMember">
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
                                            <th scope="col">Minimum Poin</th>
                                            <th scope="col">Potongan</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataMember)
                                        @foreach ($dataMember as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->minimal_poin }}</td>
                                                <td>{{ $item->potongan }} %</td>
                                                <td><form action="{{ url('Admin/delMember') }}" method="post">
                                                    @csrf
                                                    <input class="idmemberhidden" type="hidden" name="idmemberhid" value="{{ $item->id_member }}">
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

                msg = rowSelected.cells[0].innerHTML+" "+rowSelected.cells[1].innerHTML+" "+rowSelected.cells[2].innerHTML+" "+rowSelected.cells[3].innerHTML;
                msg += " ";
                document.getElementById("btnaddMember").style.visibility = "hidden";
                document.getElementById("btnupdMember").style.visibility = "visible";
                document.getElementById("txtnama").value    = rowSelected.cells[1].innerHTML;
                document.getElementById("txtpoin").value   = rowSelected.cells[2].innerHTML;
                document.getElementById("txtpotongan").value   = rowSelected.cells[3].innerHTML.substring(0,rowSelected.cells[3].innerHTML.indexOf(" "));
                document.getElementById("idjenismember").value   = rowSelected.cells[0].innerHTML;
            }
        }
    }
</script>
@endsection
