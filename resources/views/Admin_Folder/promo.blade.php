@extends("Admin_Folder.Blueprint")
@section('container-body-page')
<div class="container-form-input-admin-promo">
    <form action="promoRoute" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtnama">Nama</label>
            <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="nama">
            @error('txtnama')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tglawal">Tanggal Awal</label>
            <input type="date" class="form-control" id="tglawal" name="tglawal">
            @error('tglawal')
                <label class="alertmessage" style="color: red;">{{$message}}</label>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="txtpotongan">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tglakhir" name="tglakhir" placeholder="potongan">
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
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
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
                                <h3 class="card-title">DataTable with minimal features & hover style</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
