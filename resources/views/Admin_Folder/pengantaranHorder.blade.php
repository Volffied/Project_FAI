@extends("Admin_Folder.BlueprintKurir")
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
    <form action="{{ url('Kurir/updateStatKirim') }}" method="post" enctype="multipart/form-data">
        <div class="form-row">
            @csrf
            <input type="hidden" class="form-control" id="txtIdsimpan" name="txtIdsimpan" value="
                <?php if (isset($idhorder)) {
                    echo $idhorder;
                } ?>
            " placeholder="ID">
            @if($status_pegawai->status == "1")
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
            @else
            <div class="card col-md-4">
                <div class="imgWrap">
                    <img src="{{asset('images/invoice_png_kurir.png')}}" id="imgView" width="200px" height="200px">
                </div>
                <input type="file" id="inputFile" name="imgupload" accept="image/x-png,image/jpg,image/jpeg" onchange="preview()">
                @error('imgupload')
                <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                @enderror
            </div>
            @endif
        </div>
        <div class="form-row" style="float: right;">
            <input type="submit" class="btn" id="btnupdhorder" name="btnupd" value="Submit">
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
                                        .thead {
                                            background-color: #8F192F !important;
                                            color: white;
                                        }
                                    </style>
                                    <thead class="thead">
                                        <tr>
                                            <th scope="col" style="width: 2%">ID</th>
                                            <th scope="col" style="width: 10%">Tanggal Transaksi</th>
                                            <th scope="col" style="width: 10%">Nama Customer</th>
                                            <th scope="col" style="width: 10%">Alamat</th>
                                            <th scope="col" style="width: 8%">Grandtotal</th>
                                            <th scope="col" style="width: 5%">Estimasi</th>
                                            <th scope="col" style="width: 10%">Tanggal Pengiriman</th>
                                            <th scope="col" style="width: 10%">Status</th>
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
<script>
    var defaultImg = "";
    $(document).ready(function() {
        setInterval(updateTabel, 1000);
        defaultImg = $("#imgView").attr("src");
        if ($("#inputFile").length) {
            $("#btnupdhorder").prop("disabled", true);
        }

    });

    function updateTabel() {
        $.ajax({
            url: "/Kurir/updateTabelKurir",
            type: "GET",
            data: {},
            success: function(response) {
                console.log(response);
                $(".tabelKurir").html(response);
            },
            error: function(response) {
                console.log(response);
            }
        })
    }

    //preview image
    function preview() {
        var fname = $("#inputFile").val();
        var exten = fname.slice((Math.max(0, fname.lastIndexOf(".")) || Infinity) + 1);
        if (exten == 'jpg' || exten == 'png' || exten == 'jpeg') {
            imgView.src = URL.createObjectURL(event.target.files[0]);
            $("#btnupdhorder").prop("disabled", false);
        } else {
            $("#inputFile").val("");
            imgView.src = defaultImg;
            $("#btnupdhorder").prop("disabled", true);
        }
    }
</script>
@endsection
