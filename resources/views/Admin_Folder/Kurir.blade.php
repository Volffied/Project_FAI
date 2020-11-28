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
                                        <th scope="col">ID</th>
                                        <th scope="col">Tanggal Transaksi</th>
                                        <th scope="col">Tanggal Pengiriman</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Grandtotal</th>
                                        <th scope="col">Estimasi</th>
                                        <th scope="col">Metode</th>
                                        <th scope="col">Kode Customer</th>
                                        <th scope="col">Kode Pegawai</th>
                                        <th scope="col">Kode Promo</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    @isset($daftarPenjualan)
                                    <tbody>
                                        @foreach ($daftarPenjualan as $item)
                                        <tr>
                                            <th scope="row">{{ $item->id_horder }}</th>
                                            <td>{{ $item->tanggal_trans }}</td>
                                            <td>{{ $item->tanggal_pengiriman }}</td>
                                            <td>{{ $item->subtotal }}</td>
                                            <td>{{ $item->grandtotal }}</td>
                                            <td>{{ $item->estimasi_waktu }}</td>
                                            <td>{{ $item->metode_pembayaran }}</td>
                                            <td>{{ $item->kode_customer }}</td>
                                            <td>{{ $item->kode_pegawai }}</td>
                                            <td>{{ $item->kode_promo }}</td>
                                            @if ($item->status_order == 0)
                                                <td>Menunggu Konfirmasi</td>
                                            @elseif($item->status_order == 1)
                                                <td>Sedang Dikirim</td>
                                            @elseif($item->status_order == 2)
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
