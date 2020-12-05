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
                            <div class="card-body">
                                <label for="cbpilihbulan">Bulan :</label>
                                <div class="form-row" style="display: flex; flex-direction: row;">
                                    <div class="form-group col-md-4" >
                                        <select name="cbpilihbulan" id="cbpilihbulan" class="form-control">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        <input type="submit" style="margin-top: 10px;" class="btn btn-danger" id="btnShow" name="btnshow" value="Show" >
                                        <input type="submit" style="margin-top: 10px;" class="btn btn-danger" id="btnShowAll" name="btnshowall" value="Show All" >
                                        <input type="submit" style="margin-top: 10px;" class="btn btn-danger" id="btnReport" name="btnreport" value="Report" >
                                    </div>
                                </div>
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
                                            <td>{{ $item->tanggal_trans }}</td>
                                            <td>Rp. {{ $item->grandtotal }},00</td>
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
        </section>
    </div>
</div>

@endsection
