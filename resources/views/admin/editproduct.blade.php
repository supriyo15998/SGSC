<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGSC-Admin | Edit Product</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('adminLayouts.css')
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
        Edit Product
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary" style="padding: 4%">
            <div class="box-header with-border" style="text-align: center; font-weight: bold;">
              <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('editproductfinal', $product->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="product_category">Product Category</label>
                  <select id="product_category" class="form-control" name="category_id">
                    <option selected disabled>Select Product Category</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="inputName">Product Name</label>
                  <input type="text" name="name" value="{{ $product->name }}" id="inputName" class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="unit">Product Description</label>
                  <textarea name="description" id="unit" class="form-control">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="height">Height (In ft and inches)</label>
                  <input type="text" name="height" value="{{ $product->height }}" id="height" class="form-control">
                  <label for="width">Width (In ft and inches)</label>
                  <input type="text" name="width" value="{{ $product->width }}" id="width" class="form-control">
                  <label for="length">Length (In ft and inches)</label>
                  <input type="text" name="length" value="{{ $product->length }}" id="length" class="form-control">
                </div>
                <div class="form-group">
                  <label for="product_material">Product Material</label>
                  <select id="product_material" class="form-control" name="material_id">
                    <option selected disabled>Select Product Material</option>
                    @foreach($materials as $material)
                      <option value="{{ $material->id }}" {{ $material->id == $product->material->id ? 'selected' : '' }}>{{ $material->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="weight">Weight (In Kg.)</label>
                  <input type="text" value="{{ $product->weight }}" name="weight" class="form-control">
                </div>
                <div class="form-group">
                  <label for="amount">Approx. Price (In Rupees)</label>
                  <input id="amount" name="price" value="{{ $product->price }}" type="text" class="form-control">
                </div>
               
               
                <div class="form-group d-flex flex-column">
                  <label for="image">Upload Photo</label>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group d-flex flex-column">
                  <input type="submit" name="create_product" class="btn btn-success" value="Edit Product">
                </div>
              </div>
            <form>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
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
</body>
</html>
