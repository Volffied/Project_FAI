@extends("Admin_Folder.BlueprintAdmin")
@section('container-body-page')
<div class="container-form-input-admin-promo">
<form action="{{ url('Admin/promoRoute') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtnama">Nama</label>
            <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="Nama">
            @error('txtnama')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="txtnama">Potongan</label>
            <input type="number" class="form-control" id="diskon" name="diskon" placeholder="Potongan">
            @error('diskon')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tglawal">Tanggal Awal</label>
            <input type="date" class="form-control" id="tglawal" name="tglawal" placeholder="Tanggal Awal">
            @error('tglawal')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="txtpotongan">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tglakhir" name="tglakhir" placeholder="Tanggal Expired">
            @error('tglakhir')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row" style="float: right;">
        <input type="submit" class="btn btn-primary" name="btnadd" value="Submit">
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
                    <h1>Promo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('Admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Promo</li>
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
                                            <th scope="col">Potongan</th>
                                            <th scope="col">Tanggal Awal</th>
                                            <th scope="col">Tanggal Akhir</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @isset($dataPromo)
                                        @foreach ($dataPromo as $item)
                                            <tr>
                                                <th scope="row">{{ $ctr }}</th>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->diskon_potongan }} %</td>
                                                <td>{{ $item->tanggal_awal }}</td>
                                                <td>{{ $item->tanggal_akhir }}</td>
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
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
