<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">Sarkar Gas Servicing Center</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Route::currentRouteName() == 'index' ?  'active' : '' }}"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
        <li class="nav-item {{ Route::currentRouteName() == 'about' ?  'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
        <li class="nav-item {{ Route::currentRouteName() == 'gallery' ?  'active' : '' }}"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
        <li class="nav-item {{ Route::currentRouteName() == 'services' ?  'active' : '' }}"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
        <li class="nav-item {{ Route::currentRouteName() == 'products' ?  'active' : '' }}"><a href="{{ route('products') }}" class="nav-link">Products</a></li>
        <li class="nav-item {{ Route::currentRouteName() == 'contact' ?  'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>