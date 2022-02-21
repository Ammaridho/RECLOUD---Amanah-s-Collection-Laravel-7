
<section id="transaksi" class="transaksi">
    <!--Section: Block Content-->
    <div class="container" id="listTransaksi">

      {{-- header transaksi --}}
      <div class="row">
        <div class="col-12 text-center">
          <h5 class="text-dark" style="float:left">Transaksi</h5>
        </div>
      </div>

      @if (count($transaksi) > 0)

        {{-- row isi transaksi --}}
        <div class="row">
          <div class="col">
            <div class="isitransaksi" style="height: 400px; overflow-y:scroll; border: 1px solid rgb(185, 185, 185);">
                @foreach ($transaksi as $item)
                    <!-- Card -->
                    <div class="card mb-3 checkboxsatusatu">
                        
                        <div class="card-body">
                            <div class="row">

                                <div class="col-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <div class="mask waves-effect waves-light text-center">
                                        <img class="img-fluid"
                                            src="img/gambarbaju/1.png">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <p style="font-size: 10px">Nama Baju</p>
                                    <p>1 Barang</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <p>Rp. 200.000</p>
                                </div>
                                <div class="col-8">
                                    <p>Bayar</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Card -->  
                    
                @endforeach
            </div>
          </div>
        </div>


      @else
          <h3 class="text-dark">transaksi masi kosong!</h3>
      @endif

    </div>

</section>