@extends("Admin_Folder.BlueprintAdmin")
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
                    <h1>Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php
            $ctr = 1;
            $ctr1 = 1;
            $ctr2 = 1;
            $ctr3 = 1;
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
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">kategori</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataBarang)
                                        @foreach ($dataBarang as $item)
                                            <tr>
                                                <td scope="row">{{ $ctr }}</td>
                                                <td><img src="{{ $item->gambar }}" alt="" style="width: 80px; height: 80px;"></td>
                                                <td>{{ $item->nama_barang }}</td>
                                                <td>{{ $item->nama_kat }}</td>
                                                <td class="price">{{ $item->harga }}</td>
                                                <td>{{ $item->stok }}</td>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Kategori</h2>
                            </div>
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-hover">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataKat)
                                        @foreach ($dataKat as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr1 }}</th>
                                                <td>{{ $item->nama_kategori }}</td>
                                            </tr>
                                            <?php
                                                $ctr1 = $ctr1 + 1;
                                            ?>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Promo</h2>
                            </div>
                            <div class="card-body">
                                <table id="example4" class="table table-bordered table-hover">
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
                                            <th scope="col">Potongan</th>
                                            <th scope="col">Tanggal Awal</th>
                                            <th scope="col">Tanggal Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataPromo)
                                        @foreach ($dataPromo as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr2 }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->diskon_potongan }} %</td>
                                                <td>{{ $item->tanggal_awal }}</td>
                                                <td>{{ $item->tanggal_akhir }}</td>
                                            </tr>
                                            <?php
                                                $ctr2 = $ctr2 + 1;
                                            ?>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Member</h2>
                            </div>
                            <div class="card-body">
                                <table id="example5" class="table table-bordered table-hover">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataMember)
                                        @foreach ($dataMember as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr3 }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->minimal_poin }}</td>
                                                <td>{{ $item->potongan }} %</td>
                                            </tr>
                                            <?php
                                                $ctr3 = $ctr3 + 1;
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
