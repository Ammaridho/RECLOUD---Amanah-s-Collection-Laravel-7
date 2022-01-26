
<section id="keranjang" class="keranjang">
    <!--Section: Block Content-->
    <div class="container">
      
      <div id="cobabuton"></div>

      {{-- header keranjang --}}
      <div class="row">
        <div class="col-12 text-center">
          <h5 class="text-dark" style="float:left">Cart</h5>
        </div>
      </div>

      @if (count($arrayNamaBaju) > 0)

        <div class="row">
          <div class="col headerkeranjang">
            <div class="form-check mb-3">
              <input class="form-check-input position-static" type="checkbox" id="cekboxpilihsemua" value="option1" aria-label="...">
              <label class="form-check-label" for="inlineCheckbox1">Pilih Semua</label>
            </div>
            {{-- button hapus --}}
            <button id="btnHapusKeranjang" onclick="hapusKeranjang('keranjang_id')"><h6>Hapus</h6></button>
          </div>
        </div>

        {{-- row isi keranjang --}}
        <div class="row">
          <div class="col">
            <div class="isiKeranjang" style="height: 400px; overflow-y:scroll; border: 1px solid rgb(185, 185, 185);">
                <?php 
                  $ukur = count($arrayNamaBaju); 
                  $total = 0;
                ?>
                @for ($i = $ukur-1; $i >= 0; $i--)
                <!-- Card -->
                  <div class="card mb-3 checkboxsatusatu">
                    
                      <div class="card-body">
                        <span>
                          <div class="row">
                            <div class="col-7 cekboxsatu">
                              <input id="cekboxsatu" name="keranjang_id" type="checkbox" value="{{$keranjang_id[$i]}}" data-valuetwo="{{$arrayTotalBiaya[$i]}}" />
                              <label for="keranjang_id">{{$keranjang_id[$i]}}</label>
                            </div>
                            <div class="col-5" >
                                {{-- button hapus --}}
                                <form action="/keranjang/delete/{{$keranjang_id[$i]}}"  method="post" style="float: right">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form> 
                            </div>
                          </div>

                        </span>

                        <button onclick="openDetailKeranjang({{$keranjang_id[$i]}})" data-toggle="modal" data-target="#exampleModal">
                          <div class="row mb-4">              
                            <div class="col">
                              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                  <div class="mask waves-effect waves-light text-center">
                                    <img class="img-fluid w-100"
                                      src="img/gambarbaju/{{$arrayGambarBaju[$i]}}">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div>
                                <div class="d-flex justify-content-between">
                                  <div class="detail">
                                    <h5>{{$arrayNamaBaju[$i]}}</h5>
                                    <p class="mb-3 text-muted text-uppercase small">Jumlah : {{$arrayJumlahBaju[$i]}}</p>
                                    <p class="mb-2 text-muted text-uppercase small">Ukuran : {{$arrayUkuran[$i]}}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p>Harga : {{$arrayTotalBiaya[$i]}}</p>
                          <?php $total += $arrayTotalBiaya[$i]; ?>
                        </button>
                      </div>
                    
                  </div>
                <!-- Card -->  
                @endfor
            </div>
          </div>
        </div>

        {{-- footer Keranjang --}}
        <div class="row mt-2">
          <div class="col">
            <div class="subtotal text-center">
              <h5 style="font-size: 18px">Total  : {{$total}}</h5>
            </div>
            <a class="btn tombol-checkout" onclick="cekoutKeranjang('keranjang_id')">Checkout</a>
          </div>
        </div>

      @else
          <h3 class="text-dark">Keranjang masi kosong!</h3>
      @endif

    </div>

</section>