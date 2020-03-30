<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGSC-Admin | Add Product</title>
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
        Add New Product
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Product</li>
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
              <h3 class="box-title">Add New Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if($errors->any())
              <div class="alert alert-danger">
                <ul> 
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('postproduct') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="product_category">Product Category</label>
                  <select id="product_category" class="form-control" name="category_id">
                    <option selected disabled>Select Product Category</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="inputName">Product Name</label>
                  <input type="text" name="name" id="inputName" class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="unit">Product Description</label>
                  <textarea name="description" id="unit" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="height">Height (In ft and inches)</label>
                  <input type="text" name="height" id="height" class="form-control">
                  <label for="width">Width (In ft and inches)</label>
                  <input type="text" name="width" id="width" class="form-control">
                  <label for="length">Length (In ft and inches)</label>
                  <input type="text" name="length" id="length" class="form-control">
                </div>
                <!-- <div class="form-group">
                  <label for="package_category">Product Size</label>
                  <select id="package_category" class="form-control" name="package_category">
                    <option selected disabled>Select Product Size</option>
                    <option value="H">H</option>
                    <option value="L">L</option>
                    <option value="W">W</option>
                  </select>
                </div> -->
                <div class="form-group">
                  <label for="product_material">Product Material</label>
                  <select id="product_material" class="form-control" name="material_id">
                    <option selected disabled>Select Product Material</option>
                    @foreach($materials as $material)
                      <option value="{{ $material->id }}">{{ $material->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="weight">Weight (In Kg.)</label>
                  <input type="text" name="weight" class="form-control">
                </div>
                <div class="form-group">
                  <label for="amount">Approx. Price (In Rupees)</label>
                  <input id="amount" name="price" type="text" class="form-control">
                </div>
               
                <!-- <div class="form-group">
                  <label for="facilities">Facilities (comma separated)</label>
                  <input type="text" name="facilities" id="facilities" class="form-control">
                </div> -->
                <!-- <div class="form-group">
                  <label for="t-date-depart">Tentative Date Departure</label>
                  <input type="date" name="depart_date" id="t-date-depart" class="form-control">
                </div>
                <div class="form-group">
                  <label for="t-date-arrival">Tentative Date Arrival</label>
                  <input type="date" name="arrival_date" id="t-date-arrival" class="form-control">
                </div>
                <div class="form-group">
                  <input type="number" name="days"><b>Days</b> <input type="number" name="nights"><b>Nights</b>
                </div> -->
                <div class="form-group d-flex flex-column">
                  <label for="image">Upload Photo</label>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group d-flex flex-column">
                  <input type="submit" name="create_product" class="btn btn-success" value="Add New Product">
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
