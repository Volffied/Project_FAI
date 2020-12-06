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
                            <!-- /.card-header -->
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
                            <div class="card-body">
                                <form action="{{ url('Master/updateTabelReport') }}" method="post">
                                    @csrf
                                    <label for="cbpilihbulan">Bulan :</label>
                                    <div class="form-row" style="display: flex; flex-direction: row;">
                                        <div class="form-group col-md-4" >
                                            <select name="cbpilihbulan" id="cbpilihbulan" class="form-control">
                                                @if (isset($bulan) && $bulan == 1)
                                                    <option value="1" selected>Januari</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Januari">
                                                @else
                                                    <option value="1">Januari</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 2)
                                                    <option value="2" selected>Februari</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Februari">

                                                @else
                                                    <option value="2">Februari</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 3)
                                                    <option value="3" selected>Maret</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Maret">
                                                @else
                                                    <option value="3">Maret</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 4)
                                                    <option value="4" selected>April</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan April">
                                                @else
                                                    <option value="4">April</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 5)
                                                    <option value="5" selected>Mei</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Mei">
                                                @else
                                                    <option value="5">Mei</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 6)
                                                    <option value="6" selected>Juni</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Juni">
                                                @else
                                                    <option value="6">Juni</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 7)
                                                    <option value="7" selected>Juli</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Juli">
                                                @else
                                                    <option value="7">Juli</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 8)
                                                    <option value="8" selected>Agustus</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Agustus">
                                                @else
                                                    <option value="8">Agustus</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 9)
                                                    <option value="9" selected>September</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan September">
                                                @else
                                                    <option value="9">September</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 10)
                                                    <option value="10" selected>Oktober</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Oktober">
                                                @else
                                                    <option value="10">Oktober</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 11)
                                                    <option value="11" selected>November</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan November">
                                                @else
                                                    <option value="11">November</option>
                                                @endif
                                                @if (isset($bulan) && $bulan == 12)
                                                    <option value="12" selected>Desember</option>
                                                    <input type="hidden" id="judul" value="Laporan Penjualan Bulan Desember">
                                                @else
                                                    <option value="12">Desember</option>
                                                @endif
                                                @if (!isset($bulan))
                                                    <input type="hidden" id="judul" value="Laporan Penjualan">
                                                @endif
                                            </select>
                                            <input type="submit" class="btn" id="btnShow" name="btnshow" value="Show" >
                                            <input type="submit" class="btn" id="btnShowAll" name="btnshowall" value="Show All" >
                                            <div class="btn" id="btnReport" name="btnreport">Print</div>
                                        </div>
                                    </div>
                                </form>
                                <div id="print">
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
                                                <th scope="col" style="width: 2%">ID</th>
                                                <th scope="col" style="width: 10%">Nama Customer</th>
                                                <th scope="col" style="width: 10%">Alamat</th>
                                                <th scope="col" style="width: 10%">Tanggal Transaksi</th>
                                                <th scope="col" style="width: 8%">Grandtotal</th>
                                                <th scope="col" style="width: 10%">Status</th>
                                            </tr>
                                        </thead>
                                        @isset($daftarPenjualan)
                                        <tbody>

                                            @foreach ($daftarPenjualan as $item)
                                            <tr>
                                                <th scope="row">{{ $item->id_horder }}</th>
                                                <td>{{ $item->nama_cust }}</td>
                                                <td>{{ $item->alamat_cust }}</td>
                                                <td>{{ date('d M Y', strtotime($item->tanggal_trans)) }}</td>
                                                <td class="price">{{ $item->grandtotal }}</td>
                                                @if ($item->status_order == 1)
                                                <td>Menunggu Konfirmasi</td>
                                                @elseif($item->status_order == 2)
                                                <td>Sedang Dikirim</td>
                                                @elseif($item->status_order == 3)
                                                <td>Terkirim</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        @endisset
                                    </table>
                                </div>
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
                '<th scope="col" style="width: 10%">Nama Customer</th>'+
                '<th scope="col" style="width: 10%">Alamat</th>'+
                '<th scope="col" style="width: 10%">Tanggal Transaksi</th>'+
                '<th scope="col" style="width: 8%">Grandtotal</th>'+
                '<th scope="col" style="width: 10%">Status</th>'+
            '</tr>'
        );
        if($("#judul").val() != "Laporan Penjualan")$("#print").prepend('<h5 class="judul">'+$("#judul").val()+'</h5>');
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
        $(".judul").remove();
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
