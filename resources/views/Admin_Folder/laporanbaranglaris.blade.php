@extends("Admin_Folder.BlueprintMaster")
@section('container-body-page')

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
                    <li class="breadcrumb-item active">Laporan Penjualan</li>
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
                            @php
                                $ctr = 1;
                            @endphp
                            <!-- /.card-header -->
                            <div class="card-body">
                                <label for="cbpilihbulan">Laporan Barang Terlaris :</label>
                                <form action="{{ url('Master/reportBarangTerlaris') }}" method="post">
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
                                    @csrf
                                    <label for="cbpilihbulan">Brand :</label>
                                    <div class="form-row" style="display: flex; flex-direction: row;">
                                        <div class="form-group col-md-4" >
                                            <select name="cbpilihbrand" id="cbpilihbrand" class="form-control">
                                                @isset($brand)
                                                    @foreach ($brand as $item)
                                                        <option value="{{ $item->id_brand }}" >{{ $item->nama_brand }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                            <input type="submit" class="btn" id="btnShow" name="btnshow" value="Show" >
                                            <input type="submit" class="btn" id="btnShowAll" name="btnshowall" value="Show All" >
                                            <div class="btn" id="btnReport" name="btnreport">Print</div>
                                        </div>
                                    </div>
                                </form>
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
                                      <tr class="row-header">
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Harga Barang</th>
                                        <th scope="col">Total Terjual</th>
                                      </tr>
                                    </thead>
                                    @isset($daftarBarang)
                                    <tbody>
                                        @foreach ($daftarBarang as $item)
                                        <tr>
                                            <td style="font-weight: bold;">{{ $ctr }}</td>
                                            <td>{{ $item["nama_barang"] }}</td>
                                            <td>{{ $item["brand"] }}</td>
                                            <td class="price">{{ $item["harga_barang"] }}</td>
                                            <td>{{ $item["count"] }}</td>
                                        </tr>
                                        @php
                                            $ctr = $ctr + 1;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                    @endisset
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
    $("#btnReport").click(function(){
        $("#example2_filter").hide();
        $("form").hide();
        $(".dataTables_info").hide();
        $(".row-header").hide();
        $("tbody").prepend(
            '<tr class="row-header-fake">'+
                '<th scope="col" style="width: 2%">ID</th>'+
                '<th scope="col">Nama Barang</th>'+
                '<th scope="col">Harga Barang</th>'+
                '<th scope="col">Total Terjual</th>'+
            '</tr>'
        );
        window.print();
    });
    (function() {

    var beforePrint = function() {
    };

    var afterPrint = function() {
        $("#example2_filter").show();
        $("form").show();
        $(".dataTables_info").show();
        $(".row-header").show();
        $(".row-header-fake").remove();
    };

    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                beforePrint();
            } else {
                afterPrint();
            }
        });
    }

    window.onbeforeprint = beforePrint;
    window.onafterprint = afterPrint;

    }());
</script>
@endsection
