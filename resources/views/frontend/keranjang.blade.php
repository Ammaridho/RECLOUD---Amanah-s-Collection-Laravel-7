
<section id="keranjang" class="keranjang">
    <!--Section: Block Content-->
    <div class="container">
      
      <div id="cobabuton"></div>


      {{-- header keranjang --}}
      <div class="row">
        <div class="col-12">
          <h5 class="text-center">Cart</h5>
        </div>
      </div>

      <div class="row">
        <div class="col headerkeranjang">
          <div class="form-check mb-3">
            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
            <label class="form-check-label" for="inlineCheckbox1">Pilih Semua</label>
          </div>
          <button id="btnHapusKeranjang" onclick="getCheckedCheckboxesFor('keranjang_id')"><h6>Hapus</h6></button>
        </div>
      </div>

      {{-- row isi keranjang --}}
      <div class="row">
        <div class="col">
          

          @if (count($arrayNamaBaju)>0)
            <div class="isiKeranjang" style="height: 400px; overflow-y:scroll; border: 1px solid rgb(185, 185, 185);">
                <?php 
                  $ukur = count($arrayNamaBaju); 
                ?>
                @for ($i = $ukur-1; $i >= 0; $i--)
                <!-- Card -->
                  <div class="card mb-3 checkboxsatusatu">
                    
                      <div class="card-body">
                        <span>
                          <input name="keranjang_id" type="checkbox" value="{{$keranjang_id[$i]}}" />
                          <label for="keranjang_id">{{$keranjang_id[$i]}}</label>
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
                          <p>Harga  : {{$arrayTotalBiaya[$i]}}</p>
                        </button>
                      </div>
                    
                  </div>
                <!-- Card -->  
                @endfor
            </div>
          @else
              <h3>Keranjang masi kosong!</h3>
          @endif
          
          
        </div>
      </div>

      {{-- footer Keranjang --}}
      <div class="row mt-2">
        <div class="col">
          <div class="subtotal">
            <h5>Subtotal  :</h5>
          </div>
          <a class="btn tombol-checkout">Checkout</a>
        </div>
      </div>


    </div>

</section>