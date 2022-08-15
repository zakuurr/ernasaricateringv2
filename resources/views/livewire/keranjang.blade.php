<div>
    <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-danger">
                        {{session('message')}}
                    </div>
                    @endif
                </div>
            </div>
            <form class="col-md-12" method="post">
              <div class="site-blocks-table">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th class="product-thumbnail">Gambar</th>
                      <th class="product-name">Keterangan</th>
                      <th class="product-quantity">Jumlah</th>
                      <th class="product-total">Harga</th>
                      <th class="product-total">Total Harga</th>
                      <th class="product-remove">Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    $total = 0;
                    ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        @php
                            $total = sum($pesanan_detail->total_harga);
                        @endphp
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td class="product-thumbnail">
                                <img src="{{ asset('storage/fotomenu/'. $pesanan_detail->menu->foto) }}" alt="Image" class="img-fluid">
                              </td>
                              <td class="product-name">
                                <h2 class="h5 text-black">{{$pesanan_detail->menu->nama_menu}}</h2>
                              </td>
                              <td class="product-name">
                                <h2 class="h5 text-black">{{$pesanan_detail->jumlah_pesanan}}</h2>
                              </td>
                              <td>Rp. {{number_format($pesanan_detail->menu->harga,0,'.','.')}}</td>
                              <td><strong> Rp. {{number_format($pesanan_detail->total_harga,0,'.','.')}} </strong></td>
                              <td><i class="fa fa-trash text-danger" wire:click="destroy({{$pesanan_detail->id}})"></i></td>
                            </tr>


                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                  </tbody>
                </table>
              </div>
            </form>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
<<<<<<< HEAD

                <div class="col-md-6">
                  <a  href="{{ url('/list-menu')}}" class="btn btn-sm btn-block text-black" style="background-color: #d49701; :color : black">Lanjutkan Belanja</a>
=======
                <div class="col-md-6 mb-3 mb-md-0">
                  <button class="btn btn-primary btn-sm btn-block">Ubah Keranjang</button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-outline-primary btn-sm btn-block">Lanjutkan Belanja</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label class="text-black h4" for="coupon">Kupon</label>
                  <p>Masukan kupon jika ada.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                  <button class="btn btn-primary btn-sm">Pakai</button>
>>>>>>> e6b5eb7c7f1456ba8b0e25fb5a163dbe3de243d5
                </div>
              </div>

            </div>
            @if(!empty($pesanan))
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
<<<<<<< HEAD
                      <h3 class="text-black h4 text-uppercase">Total Pesanan</h3>
=======
                      <h3 class="text-black h4 text-uppercase">Total Keranjang</h3>
>>>>>>> e6b5eb7c7f1456ba8b0e25fb5a163dbe3de243d5
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Total Harga</span>
                    </div>
                    <div class="col-md-6 text-right">
<<<<<<< HEAD
                      <strong class="text-black">Rp. {{number_format($pesanan->total_harga,0,'.','.')}}</strong>
=======
                      <strong class="text-black">{{ number_format($total,0,'.','.') }}</strong>
>>>>>>> e6b5eb7c7f1456ba8b0e25fb5a163dbe3de243d5
                    </div>


                  </div>
                  {{-- <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Kode Unik</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">{{($pesanan->kode_unik)}}</strong>
                    </div>


                  </div> --}}
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total Bayar</span>
                    </div>
                    <div class="col-md-6 text-right">
<<<<<<< HEAD
                      <strong class="text-black">Rp. {{number_format($pesanan->total_harga,0,'.','.')}}</strong>
=======
                      <strong class="text-black">{{ number_format($total,0,'.','.') }}</strong>
>>>>>>> e6b5eb7c7f1456ba8b0e25fb5a163dbe3de243d5
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
<<<<<<< HEAD
                      <a href="{{ route('checkout')}}" class="btn btn-sm text-black" style="background-color: #d49701; :color : black style="color: white">Checkout</a>
=======
                      <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Checkout</button>
>>>>>>> e6b5eb7c7f1456ba8b0e25fb5a163dbe3de243d5
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
</div>
