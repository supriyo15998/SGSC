<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Findstate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('layouts.css')
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
  <body>
  	@include('layouts.nav')
  	<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/back_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Our Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('index') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <div class="gallery">
    	<div class="container">
    		<div class="row">
    			@foreach($galleries as $gallery)
            <div class="col-md-4">
              <a href="{{ asset('img/gallery/' . $gallery->image) }}" data-lightbox="mygallery" data-title="{{ $gallery->name }}"><img src="{{ asset('img/gallery/thumbnails/' . $gallery->thumbnail) }}"></a>
              <p style="font-family: serif; font-weight: bold;">{{ $gallery->name }}</p>
            </div>
          @endforeach
    		</div>
    	</div>
    </div>
	@include('layouts.footer')
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
  <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
  </body>
</html>