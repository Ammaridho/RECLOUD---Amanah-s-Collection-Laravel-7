
<section id="transaksi" class="transaksi p-2">
    <!--Section: Block Content-->
    {{-- <div class="container" id="listTransaksi"> --}}

      {{-- header transaksi --}}
      <div class="row pt-1">
        <div class="col-12 text-center">
          <h5 class="text-dark" style="float:left">Transaksi</h5>
        </div>
      </div>

      @if (count($transaksiData) > 0)
      
        {{-- row isi transaksi --}}
        <div class="row">
          <div class="col">
            <div class="isitransaksi" style="max-height: 400px; overflow-y:auto; border: 1px solid rgb(185, 185, 185); overflow-x: hidden;">
              
              @foreach ($transaksiData as $key => $item)
                <!-- Card -->
                  <div class="card mb-3 checkboxsatusatu" style="border: 1px black solid;">
                    
                    <div class="card-body p-0">
                      <div class="row">
                        <div class="col">
                          
                          <div class="list-group" style="max-height: 100px; overflow-y:auto;  overflow-x: hidden; border: 1px black solid;">
                            
                            @foreach ($transaksiDetail as $second)
                              @if ($second->transaksi_id == $item->id)
                                <a href="#" class="list-group-item list-group-item-action active p-0" aria-current="true">
                                  <div class="row">
                                    <div class="col-3">
                                      <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <div class="mask waves-effect waves-light text-center">
                                          <img class="img-fluid"
                                          src="img/gambarbaju/1.png">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-6">
                                      <p class="text-dark text-center">{{$second->nama_baju}}</p>
                                    </div>
                                    <div class="col-3">
                                      <p class="text-dark text-center">{{$second->jumlah}}</p>
                                    </div>
                                  </div>
                                </a>
                              @endif    
                            @endforeach
                                  
                            {{-- @foreach ($collection as $item)
                              <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                            @endforeach
                            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                            <a class="list-group-item list-group-item-action disabled">A disabled link item</a> --}}
                                  
                          </div>

                          <div class="row" style="height: 20px">
                              <div class="col">
                                  <p class="text-dark text-center">Rp {{$item->total_tagihan}}</p>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col" style="height: 20px">
                              <p class="text-dark text-center">{{$item->status}}</p>
                          </div>
                          </div>
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

    {{-- </div> --}}
    

</section>