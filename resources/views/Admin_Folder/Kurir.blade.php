@extends("Admin_Folder.BlueprintKurir")
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
                    <h1>Kurir</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Kurir</li>
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
                                            <th scope="col" style="width: 10%">Tanggal Transaksi</th>
                                            <th scope="col" style="width: 10%">Nama Customer</th>
                                            <th scope="col" style="width: 10%">Alamat</th>
                                            <th scope="col" style="width: 8%">Grandtotal</th>
                                            <th scope="col" style="width: 5%">Estimasi</th>
                                            <th scope="col" style="width: 10%">Tanggal Pengiriman</th>
                                            <th scope="col" style="width: 10%">Status</th>
                                        </tr>
                                    </thead>
                                    @isset($daftarPenjualan)
                                    <tbody>
                                        @foreach ($daftarPenjualan as $item)
                                        <tr>
                                            <th scope="row">{{ $item->id_horder }}</th>
                                            <td>{{ $item->tanggal_trans }}</td>
                                            <td>{{ $item->nama_cust }}</td>
                                            <td>{{ $item->alamat_cust }}</td>
                                            <td>{{ $item->grandtotal }}</td>
                                            @if ($item->estimasi_waktu == null)
                                            <td><i>NONE</i></td>
                                            @else
                                            <td>{{ $item->estimasi_waktu }}</td>
                                            @endif
                                            @if ($item->tanggal_pengiriman == null)
                                            <td><i>NONE</i></td>
                                            @else
                                            <td>{{ $item->tanggal_pengiriman }}</td>
                                            @endif
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
