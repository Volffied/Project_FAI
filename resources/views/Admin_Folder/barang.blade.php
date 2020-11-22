@extends("Admin_Folder.BlueprintAdmin")

@section('table-master')
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Barang</li>
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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataBarang)
                                        @foreach ($dataBarang as $item)
                                            <tr>
                                                <td scope="row">{{ $ctr }}</td>
                                                <td><img src="{{ $item->gambar }}" alt="" style="width: 80px; height: 80px;"></td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->nama_kat }}</td>
                                                <td>Rp. {{ $item->harga }},00</td>
                                                <td>{{ $item->stok }}</td>
                                                <td><a href="#" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</a></td>
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
@endsection

@section('container-body-page')
    <div class="container-form-input-admin-barang">
        <form action="{{ url('Admin/tambahBarang') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtnama">Nama</label>
                    <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="nama">
                    @error('txtnama')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="txtharga">Harga</label>
                    <input type="text" class="form-control" id="txtharga" name="txtharga" placeholder="Harga">
                    @error('txtharga')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtstok">Stok</label>
                    <input type="text" class="form-control" id="txtstok" name="txtstok" placeholder="stok">
                    @error('txtstok')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="txtgambar">Link Gambar</label>
                    <input type="text" class="form-control" id="txtgambar" name="txtgambar" placeholder="Gambar">
                    @error('txtgambar')
                        <span class="helper-text" style="color:red; font-weight:bold"> {{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cbpilijenispegawai">Kategori :</label>
                    <select name="cbpilihkategori" id="cbpilihkategori" class="form-control">
                        @isset($dataKat)
                            @foreach ($dataKat as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>
            <div class="form-row" style="float: right;">
                <input type="submit" class="btn btn-primary" name="btnadd" value="Submit">
            </div>
        </form>
    </div>
@endsection
