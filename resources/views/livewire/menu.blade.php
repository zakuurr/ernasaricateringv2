<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{url('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">List Menu</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-md-9 order-2">

          <div class="row">
            <div class="col-md-12 mb-5">
              <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
              <div class="d-flex">
                <div class="dropdown mr-1 ml-md-auto">
                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Latest
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    @foreach($kategoris as $kategori)
                    <a class="dropdown-item" href="#">{{$kategori->kategori}}</a>
                    @endforeach
                  </div>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">Relevance</a>
                    <a class="dropdown-item" href="#">Name, A to Z</a>
                    <a class="dropdown-item" href="#">Name, Z to A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Price, low to high</a>
                    <a class="dropdown-item" href="#">Price, high to low</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            @foreach($menus as $menu)
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-4 text-center border">
                <figure class="block-4-image">
                  <a href="shop-single.html"><img src="{{ asset('storage/fotomenu/'. $menu->foto) }}" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="shop-single.html">{{$menu->nama_menu}}</a></h3>
                  <p class="mb-0">{{$menu->deskripsi}}</p>
                  <p class="text-primary font-weight-bold">Rp.{{number_format($menu->harga,0,'.','.')}}</p>
                </div>
              </div>
            </div>
        @endforeach

          </div>
          {{$menus->links('')}}

        </div>

        <div class="col-md-3 order-1 mb-5 mb-md-0">
          <div class="border p-4 rounded mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
            <ul class="list-unstyled mb-0">
             @foreach($kategoris as $kategori)
              <li class="mb-1"><a href="#" class="d-flex"><span>{{$kategori->kategori}}</span></a></li>
            @endforeach
            </ul>
          </div>

          <div class="border p-4 rounded mb-4">
            <div class="mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>

            <div class="mb-4">

            </div>

            <div class="mb-4">

            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="site-section site-blocks-2">
              <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7 site-section-heading pt-4">
                  <h2>Categories</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/women.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Women</h3>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/children.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Children</h3>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                  <a class="block-2-item" href="#">
                    <figure class="image">
                      <img src="images/men.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <span class="text-uppercase">Collections</span>
                      <h3>Men</h3>
                    </div>
                  </a>
                </div>
              </div>

          </div>
        </div>
      </div>

    </div>
  </div>
