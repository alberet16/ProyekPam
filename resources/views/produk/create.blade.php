 <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<div class="container">
    <h2>Membuat Produk Baru </h2>

    @if ($errors->any())
    <div class="alert danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }} </li>
            @endforeach
        </ul>
    </div>
        
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
        <br/>
    @endif

    <form action="{{url('produk')}} " method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="nama_produk"> Nama Poduk :</label>
            <input type="text" name="name" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
                        <label>Pilih Category</label>
                        <select class="form-control" name="category_id">
                          <option value="1">Makanan dan Minuman Kantin</option>
                          <option value="2">Snack Koperasi</option>
                          <option value="3">Pulsa, Paket, dll</option>
                          <option value="5">lainnya</option>
                        </select>
                      </div>
                    
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="harga">Harga : </label>
            <input type="text" name="harga"class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="deskripsi">Deskripsi : </label>
            <textarea name="deskripsi"  cols="30" rows="10" class="form-control">

            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="image">gambar : </label>
            <input type="file" name="image" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-success">
                Simpan Produk
            </button>
        </div>
        <div class="form-group col-md-2">
            <a href="{{ URL::previous() }} ">Batal</a>
        </div>
    </div>
    </form>
</div>
    
