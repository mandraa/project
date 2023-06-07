<nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}" class="{{(Route::currentRouteName() == 'home' || Route::currentRouteName() == '')?'active':''}}"><h2>Sixteen <em>Clothing</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}" class="{{(Route::currentRouteName() == 'home' || Route::currentRouteName() == '')?'active':''}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products') }}" class="{{(Route::currentRouteName() == 'products')?'active':''}}">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about-us') }}" class="{{(Route::currentRouteName() == 'about-us')?'active':''}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact-us') }}" class="{{(Route::currentRouteName() == 'contact-us')?'active':''}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>