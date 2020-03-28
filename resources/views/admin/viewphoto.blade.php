<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGSC-Admin | Add Photo</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('adminLayouts.css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.min.css') }}">
  <style type="text/css">
    .gallery{
      margin: 10px 50px;
    }
    .gallery img{
      width: 230px;
      padding: 5px;
      filter: grayscale(100%);
      transition: 1s;
    }
    .gallery img:hover{
      filter: grayscale(0);
      transform: scale(1.1);
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('adminLayouts.navbar')
  <!-- Left side column. contains the logo and sidebar -->
  @include('adminLayouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Photo
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Photo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="gallery">
        <div class="container">
          <div class="row">
            @foreach($galleries as $gallery)
              <div class="col-md-4">
                <a href="{{ asset('img/gallery/' . $gallery->image) }}" data-lightbox="mygallery" data-title="{{ $gallery->name }}"><img src="{{ asset('img/gallery/thumbnails/' . $gallery->thumbnail) }}"></a>
                <form method="POST" action="{{ route('deletephoto', $gallery->id) }}">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="delete" class="btn btn-danger" value="Delete this image">
                </form>
              </div>
            @endforeach
            
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
@include('adminLayouts.js')
  <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
</body>
</html>
