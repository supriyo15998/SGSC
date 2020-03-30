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
    
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center w-100">
                <h1 class="mb-4">Find Properties <br>That Make You Money</h1>
                <p><a href="#" class="btn btn-primary py-3 px-4">Search Properties</a></p>
            </div>
          </div>
        </div>
      </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </div>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
            <h2 class="mb-2">Latest Products For You</h2>
          </div>
        </div>
        <div class="row">
            @foreach($latestProducts as $latestProduct)
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url('img/products/{{ $latestProduct->image }}');">
                            <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                        <div class="text">
                            <p class="price mb-3"><!-- <span class="old-price">800,000</span> --><span class="orig-price">₹ {{ $latestProduct->price }}</span></p>
                            <h3 class="mb-0"><a href="properties-single.html">{{ $latestProduct->name }}</a></h3>
                            <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>{{ $latestProduct->description }}</span>
                            <ul class="property_list">
                                <li><span>Height: </span>{{ $latestProduct->height }}</li>
                                <li><span>Width: </span>{{ $latestProduct->width }}</li>
                                <li><span>Length: </span>{{ $latestProduct->length }}</li>
                                <li><span>Material: </span>{{ $latestProduct->material->name }}</li>
                                <li><span>Weight: </span>{{ $latestProduct->weight }}</li>
                                <li><span>Category: </span>{{ $latestProduct->category->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12" style="text-align: center;">
                <a href="{{ route('products') }}" class="btn btn-warning">More Products</a>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-fullwidth">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Services</span>
            <h2 class="mb-2">Why Choose Us?</h2>
          </div>
        </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row d-md-flex text-wrapper align-items-stretch">
                    <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('images/about.jpg');"></div>
                    <div class="one-half half-text d-flex justify-content-end align-items-center">
                        <div class="text-inner pl-md-5">
                            <div class="row d-flex">
                      <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
                          <div class="media-body pl-4">
                            <h3>No Downpayment</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          </div>
                        </div>      
                      </div>
                      <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
                          <div class="media-body pl-4">
                            <h3>All Cash Offer</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          </div>
                        </div>      
                      </div>
                      <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
                          <div class="media-body pl-4">
                            <h3>Experts in Your Corner</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          </div>
                        </div>      
                      </div>
                      <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
                          <div class="media-body pl-4">
                            <h3>Locked in Pricing</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          </div>
                        </div>      
                      </div>
                    </div>
            </div>
                    </div>
            </div>
        </div>
    </section>

        <section class="ftco-counter ftco-section img" id="section-counter">
            <div class="overlay"></div>
        <div class="container">
            <div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="150">0</strong>
                <span>Satisfied <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="150">0</strong>
                <span>Total <br>Installations</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>



    <section class="ftco-section ftco-agent">
        <div class="container">
            <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Agents</span>
            <h2 class="mb-4">Our Agents</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                    <div class="img">
                        <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <h3><a href="properties.html">Ben Ford</a></h3>
                        <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">43 Properties</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">John Cooper</a></h3>
                            <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">28 Properties</span></p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                        <div class="img">
                            <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Janice Clinton</a></h3>
                                <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">30 Properties</span></p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                        <div class="img">
                            <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Eunice Henceford</a></h3>
                                <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">25 Properties</span></p>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>  
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sarkar Gas Servicing Center</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">291, Fatullapur North, Nimta, North 24 Parganas-700049, West Bengal, India</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
    
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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