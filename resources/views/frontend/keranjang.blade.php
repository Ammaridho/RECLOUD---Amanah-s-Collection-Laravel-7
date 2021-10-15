
<section id="keranjang" class="keranjang">
    <!--Section: Block Content-->
    <div class="container">
      
      {{-- header keranjang --}}
        <div class="row">
          <div class="col-12">
            <h5 class="text-center">Cart</h5>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-check mb-3">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
              <label class="form-check-label" for="inlineCheckbox1">Pilih Semua</label>
              <h6>Hapus</h6>
            </div>
          </div>
        </div>

      {{-- row isi keranjang --}}
      <div class="row">
        <div class="col">
          
          <div class="isiKeranjang" style="height: 400px; overflow-y:scroll; border: 1px solid rgb(185, 185, 185);">
            @foreach ($keranjang as $isi)
              <!-- Card -->
                <div class="card mb-3">
                  <div class="card-body">
                    <span></span>
                    <div class="form-check mb-3">
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      <label class="form-check-label" for="inlineCheckbox1">Pilih</label>
                      </div>
                    <div class="row mb-4">              
                      <div class="col-md-5 col-lg-3 col-xl-3">
                        <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                            <div class="mask waves-effect waves-light">
                              <img class="img-fluid w-100"
                                src="img/gambarbaju/">
                            </div>
                        </div>
                      </div>
                      <div class="col-md-7 col-lg-9 col-xl-9">
                        <div>
                          <div class="d-flex justify-content-between">
                            <div class="detail">
                              <h5>Blue denim shirt</h5>
                              <p class="mb-3 text-muted text-uppercase small">Jumlah</p>
                              <p class="mb-2 text-muted text-uppercase small">Ukuran</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>Harga  :</p>
                  </div>
                </div>
              <!-- Card -->  
            @endforeach
          </div>
          
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