@extends("Admin_Folder.Blueprint")
@section('container-body-page')
<div class="container-form-input-admin-pegawai">
    <form action="barangRoute" method="post">
        @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtnama">Nama</label>
            <input type="text" class="form-control" id="txtnama" name="txtnama" placeholder="nama">
        </div>
        <div class="form-group col-md-6">
            <label for="txtemail">Email</label>
            <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="txtpass">Password</label>
            <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="password">
        </div>
        <div class="form-group col-md-6">
            <label for="txtphone">No Telepon</label>
            <input type="text" class="form-control" id="txtphone" name="txtphone" placeholder="nomer telepon">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="cbpilijenispegawai">Jenis Pegawai :</label>
            <select name="cbpilijenispegawai" id="cbpilijenispegawai" class="form-control">
                <option value=""></option>
            </select>
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
