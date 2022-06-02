@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Table Transaksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaksi Panding</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kode Payment</th>
                            <th>User ID</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th style="width: 140px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listPanding as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->kode_payment }}</td>
                                <td>{{ $data->user_id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->status}}</td>
                                <td>
                                    <a href="{{ route('transaksiBatal', $data->id) }}">
                                        <button type="button" class="btn btn btn-danger btn-xs">Batal</button>
                                    </a>
                                    
                                    <a href="{{action('TransaksiController@confirm',$data['id'])}} ">
                                        <button type="button" class="btn btn btn-success btn-xs">Konfirmasi</button>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

            <br>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaksi Selesai</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Total</th>
                            <th>Bank</th>
                            <th>Status</th>
                            <th style="width: 140px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
