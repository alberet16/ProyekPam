@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Table Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-sm">
      
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kategori Table</h3><br>
              <table class="table">
               <tr>
                 <td>Id</td>
                 <td>Kategori</td>
               </tr>
               <tr>
                 <td>1</td>
                 <td>Makanan dan Minuman Kantin</td>
               </tr>
               <tr>
                 <td>2</td>
                 <td>Snack Koperasi</td>
               </tr>
               <tr>
                 <td>3</td>
                 <td>Pulsa, Paket, dll</td>
               </tr>
             </table>
             <br>
             <a href="{{action('ProdukController@create')}} " class="btn btn-primary">Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-striped">
            <thead>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Dekripsi</th>
            <th>Gambar</th>
            <th colspan="2" >Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $produk as $produk)
            <tr>
                <td>{{$produk['id']}} </td>
                <td>{{$produk['name']}} </td>
                <td>{{$produk['category_id']}} </td>
                <td>{{$produk['harga']}} </td>
                <td>{{$produk['deskripsi']}} </td>
                <td>{{$produk['image']}} </td>
                <td>
                <a href="{{action('ProdukController@edit',$produk['id'])}} " class="btn btn-warning">Edit</a>    
                </td>
                <td>
                    <form action="{{action('ProdukController@destroy',$produk['id'])}} " method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>

       

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection