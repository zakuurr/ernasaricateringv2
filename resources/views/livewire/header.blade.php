<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <div class="site-logo">
                <img src="frontend/images/logoerna.png" class="img-fluid" style="width: 30%">
              </div>
          </div>

          <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Erna Sari Catering </a>
            </div>
          </div>

          <div class="col-6 col-md-4 order-3 order-md-3 text-right">
            <div class="site-top-icons">
              <ul>
                <li><a href="#"><span class="icon icon-person"></span></a></li>
                <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                <li>
                  <a href="cart.html" class="site-cart">
                    <span class="icon icon-shopping_cart"></span>
                    <span class="count">2</span>
                  </a>
                </li>
                <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
      <div class="container">
        <ul class="site-menu js-clone-nav d-none d-md-block">
          <li class="active">
            <a href="{{url('/')}}">Home</a>
          </li>
          <li class="">
            <a href="about.html">Tentang Kami</a>

          </li>
          <li><a href="{{url('/list-menu')}}">Menu</a></li>
          <li><a href="contact.html">Kontak Kami</a></li>
        </ul>
      </div>
    </nav>
  </header>
