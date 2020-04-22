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
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/back_2-min.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate">
	          <div class="heading-section">
	            <h2 class="mb-4">Welcome To Sarkar Gas Servicing Center</h2>

	            <p>We are engaged in manufacturing, retailing and wholesaling the best quality Gas Manifolds, Steam Boiler Gas Burner, etc.</p>
	           
	            <p><a href="{{ route('products') }}" class="btn btn-primary">View Products</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter ftco-section img" id="section-counter">
        <div class="overlay">
          
        </div>
        <div class="container">
            <div class="row">
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="150">0</strong>
                <span>Satisfied <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="150">0</strong>
                <span>Total <br>Installations</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div> -->
        </div>
        </div>
    </section>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<h3 style="font-weight: 600; font-size: 20px;">Our Mission</h3>
    				<p>We “Sarkar Gas Servicing Center” are a “Sole Proprietorship (Individual) Firm” that started in the year 2000 at Kolkata, (West Bengal, India). Supported by a team of skilled personnel, we are engaged in manufacturing, retailing and wholesaling the best quality Gas Manifolds, Steam Boiler Gas Burner, etc. Under the management of our mentor “Prabir Sarkar (Proprietor)”, we have achieved reputed position in the industry.</p>
    			</div>
    			<div class="col-md-4">
    				<h3 style="font-weight: 600; font-size: 20px;">Our Vission</h3>
    				<p>With our brilliant technical knowledge and expertise, we have emerged as one of the prominent organizations engaged in providing Kitchen Set Up Services. Empowered with well trained and qualified professionals, we also undertake jobs related to the Maintenance and Repairing of the LPG Pipe Lines. Acclaimed in the market for their reliability and effectiveness, these services are offered by us at industry leading prices. Besides this, we are also engaged in manufacturing and supplying of technically superior LPG Corrugation Burners that are widely demanded in different industries.</p>
    			</div>
    			<div class="col-md-4">
    				<h3 style="font-weight: 600; font-size: 20px;">Our Value</h3>
    				<p>To offer the best products and services, we have developed a sound infrastructure that spreads across a wide area. It is segregated into various departments and units like designing, production, quality testing and warehousing. Each division is installed with all the requisite facilities that help us to ensure smooth and streamlined production process. The unit is designed in such a manner that it ensures that our production mechanisms are foolproof and the best in the industry.</p>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              @foreach($testimonials as $testimonial)
                <div class="item">
                  <div class="testimony-wrap py-4">
                    <div class="text">
                      <p class="mb-4">{{ $testimonial->message }}</p>
                      <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{ asset('img/testimonials') . '/' . $testimonial->image }}')"></div>
                        <div class="pl-3">
                          <p class="name">{{ $testimonial->name }}</p>
                          <span class="position">{{ $testimonial->organisation }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
		

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