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
                                    <div class="form-row" style="display: flex; flex-direction: row;">
                                        <input type="submit" class="btn" id="btnReport" name="btnreport" value="Report" >
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
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
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
                                            <td>Rp. {{ $item["harga_barang"] }},00</td>
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
@endsection
