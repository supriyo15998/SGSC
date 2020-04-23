<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <style type="text/css">
      .quote{
        border: 1px solid #d4ca68;
        padding: 4px;
        border-radius: 4px;
        font-size: 20px;
      }
      .quote:hover{
        background-color: #d4ca68;
        color: white;
        transition: 0.8s;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.css')
  </head>
  <body>
    
	  @include('layouts.nav')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" 
    style="background-image: url({{ asset('images/back_2-min.jpg') }}" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Properties Details</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Details<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img rounded" style="background-image: url('{{ asset('img/products/' . $product->image) }}');"></div>
      				<div class="text">
      					<h2>{{ $product->name }}</h2>
      					<span class="subheading">{{ $product->description }}</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							   <!--  <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
							    </li> -->
							  </ul>
							</div>
              <a href="{{ route('quotation', $product->id) }}" class="quote">Request For Quotation</a>
						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Height: {{ $product->height }}</li>
						    				
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Width: {{ $product->width }}</li>
						    				
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Length: {{ $product->length }}</li>
						    				
						    			</ul>
						    		</div>
                    <div class="col-md-4">
                      <ul class="features">
                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Material: {{ $product->material->name }}</li>
                        
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <ul class="features">
                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Weight: {{ $product->weight }}</li>
                        
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <ul class="features">
                        <li class="check"><span class="ion-ios-checkmark-circle"></span>Price: ₹ {{ $product->price }} Approx.</li>
                        
                      </ul>
                    </div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                  <h5 style="text-align: center;">Product Description</h5>
						      <p>{{ $product->description }}</p>
						    </div>

						    
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>
		

   @include('layouts.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Baal Why Not Extending a base layout !-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    
    
  </body>
</html>