<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Findstate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('layouts.css')
  </head>
  <body>
    
	  @include('layouts.nav')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Products</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Products <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    @foreach($categories as $category)
    <h2 style="text-align: center;">{{$category->name}}</h2>
      <section class="ftco-section goto-here">
      	<div class="container">     
            <div class="row">
              @foreach($category->products as $category->product)
              	<div class="col-md-4">
              		<div class="property-wrap ftco-animate">
              			<div class="img d-flex align-items-center justify-content-center" style="background-image: url('img/products/{{ $category->product->image }}');">
              				<a href="{{ route('individualproduct', ['categoryslug' => $category->slug, 'id' => $category->product->id]) }}" class="icon d-flex align-items-center justify-content-center btn-custom">
              					<span class="ion-ios-link"></span>
              				</a>
              				<div class="list-agent d-flex align-items-center">
              					
              				</div>
              			</div>
              			<div class="text">
              				<p class="price mb-3"><span class="orig-price">Price: ₹ {{ $category->product->price }}</span><br><span class="orig-price">Weight: {{ $category->product->weight }} Kg</span></p>
              				<h3 class="mb-0"><a href="{{ route('individualproduct', ['categoryslug' => $category->slug, 'id' => $category->product->id]) }}">{{ $category->product->name }}</a></h3>
              				<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>{{ $category->product->description }}</span>
              				<ul class="property_list">
              					<li><span>Height:</span>{{ $category->product->height }}</li>
              					<li><span>Width:</span>{{ $category->product->width }}</li>
                        <li><span>Length:</span>{{ $category->product->length }}</li>
              					<li><span>Material:</span>{{ $category->product->material->name }}</li>
              				</ul>
              			</div>
              		</div>
              	</div>
              @endforeach
            </div>
      	</div>
      </section>
		@endforeach

    @include('layouts.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>