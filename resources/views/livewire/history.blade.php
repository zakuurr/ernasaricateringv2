<div>
    <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('msg'))
                    <div class="alert alert-danger">
                        {{session('msg')}}
                    </div>
                    @endif
                </div>
            </div>

          </div>
          <div class="row mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th class="product-thumbnail">Tanggal Pesan</th>
                              <th class="product-name">Kode Pemesanan</th>
                              <th class="product-quantity">Pesanan</th>
                              <th class="product-total">Status</th>
                              <th class="product-total">Total Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no = 1;
                            $total = 0;
                            ?>
                                @forelse ($pesanans as $pesanan)

                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                      {{$pesanan->created_at}}</td>
                                      <td>
                                        {{$pesanan->kode_pemesanan}}</td>
                                        <td>
                                                <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id',$pesanan->id)->get() ?>
                                                @foreach($pesanan_details as $pesanan_detail)
                                                <ul>
                                                    <li><img src="{{ asset('storage/fotomenu/'. $pesanan_detail->menu->foto) }}" alt="Image" class="img-fluid mt-3 p-3" width="100">
                                                        {{$pesanan_detail->menu->nama_menu}}
                                                        </li>
                                                    </ul>
                                                @endforeach
                                        </td>
                                        <td>
                                           @if($pesanan->status == 1)
                                                Belum lunas
                                                @else
                                                Lunas
                                                @endif
                                        </td>
                                        <td>
                                           Rp. {{number_format($pesanan->total_harga,0,'.','.')}}
                                         </td>

                                    </tr>


                                @empty
                                <tr>
                                    <td colspan="7">Data Kosong</td>
                                </tr>
                                @endforelse
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
          </div>
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Informasi Pembayaran</h2>
            <div class="p-3 p-lg-5 border">

                <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                  <div class="collapse" id="collapsebank">
                    <div class="py-2">
                      <p class="mb-0">
                        <div class="media">
                            <img class="mr-3" src="{{ asset('')}}frontend/images/bri.png" alt="BRI" width="50">
                            <div class="media-body">
                              <h5 class="mt-0 text-black" >BANK BRI</h5>
                              <p class="text-black"> REK </p>
                            </div>
                          </div>
                          <div class="media">
                            <img class="mr-3 mt-3" src="{{ asset('')}}frontend/images/bni.png" alt="BRI" width="50">
                            <div class="media-body">
                              <h5 class="mt-0 text-black">BANK BNI</h5>
                              <p class="text-black"> REK </p>
                            </div>
                          </div>
                          <div class="media">
                            <img class="mr-3 mt-3" src="{{ asset('')}}frontend/images/bca.png" alt="BCA" width="50">
                            <div class="media-body">
                              <h5 class="mt-0 text-black">BANK BCA</h5>
                              <p class="text-black"> REK </p>
                            </div>
                          </div>
                          <div class="media">
                            <img class="mr-3 mt-3" src="{{ asset('')}}frontend/images/mandiri.png" alt="MANDIRI" width="50">
                            <div class="media-body">
                              <h5 class="mt-0 text-black">BANK MANDIRI</h5>
                              <p class="text-black"> REK </p>
                            </div>
                          </div>

                      </p>
                    </div>
                  </div>
                </div>

              </div>
        </div>
        </div>
      </div>
</div>
