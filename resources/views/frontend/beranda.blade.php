@extends('layouts.main')

@section('content')

    <!-- halaman -->
    <section class="halaman" id="halaman">
        <div class="container">
          <div class="row custom-section d-flex align-items-center">  
            <div class="col-12 col-lg-4">
              <div id="carouselContent" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active p-4">
                        <p style="font-size: 35px;">Amanah Collection</p>
                        <p>Lorem ipsum nang ndi koe le</p>
                    </div>
                    <div class="carousel-item p-4">
                      <p style="font-size: 35px;">Amanah Collection</p>
                      <p>Lorem ipsum nang ndi koe le</p>
                    </div>
                    <div class="carousel-item p-4">
                      <p style="font-size: 35px;">Amanah Collection</p>
                      <p>Lorem ipsum nang ndi koe le</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselContent" role="button" data-bs-slide="prev">
                  <span><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></span>
                  <span class="visually-hidden"></span>
                </a>
                <a class="carousel-control-next" href="#carouselContent" role="button" data-bs-slide="next">
                  <span><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></span>
                  <span class="visually-hidden"></span>
                </a>
              </div>
            </div>
  
            <div class="col-12 col-lg-8">
                <img src="assets/images/peta.png" alt="peta">
            </div>
          </div>
        </div>
    </section>
      <!-- akhir halaman -->
  
      <!-- carousel -->
      <section class="produk" id="produk">
        <div class="container">
          <h2 style="text-align: center;">Produk kami</h2>
          <div class="row mb-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/jogja1.JPG" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/jogja2.JPG" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="assets/images/jogja3.JPG" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir carousel -->
  
  
      <!-- info panel -->
      <section class="infoPanel" id="infoPanel">
  
        <div class="container">
          <h2>Mengapa kami?</h2>
          <div class="row text-center info-panel">
  
            <div class="col-sm-4">
              <img src="assets/images/cust.png" style="width: 30%; padding: 10px;" alt="custserv">
              <h4>24 Hours</h4> 
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
  
            <div class="col-sm-4">
              <img src="assets/images/cust.png" style="width: 30%; padding: 10px;" alt="custserv">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
  
            <div class="col-sm-4">
              <img src="assets/images/cust.png" style="width: 30%; padding: 10px;" alt="custserv">
              <h4>24 Hours</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir -->
      
      <!-- contact us -->
      <section class="contact" id="contact">
        <div class="container">
          <div class="row">
            
            <div class="col-xl-4 text-center">
              <h2>Kontak kami</h2>
              <span></span>
              <p>We're very approachable and would love to speak to you.
                you can call us, direct message, send us email or simply complete the enquery form.</p>
              <div class="fa fa-whatsapp"><p style="display: inline; font-family: Viga; margin-left: 10px;">080808080808</p></div>
              <div class="fa fa-facebook-official"><p style="display: inline; font-family: Viga; margin-left: 10px;">amanahscollection</p></div>
              <div class="fa fa-instagram"><p style="display: inline; font-family: Viga; margin-left: 10px;">amanahscollection</p></div>
              <div class="fa fa-envelope"><p style="display: inline; font-family: Viga; margin-left: 10px;" >collectionamanah@gmail.com</p></div>
            </div>
          
            <div class="col-xl-6 offset-xl-2 text-center">
              <img src="assets/images/cs.png" alt="peta" width="100%">
            </div> 
            <aside>
              <h1>Send us a message</h1>
              <input type="text" id="name" name="firstname" placeholder="Name">
              <input type="text" id="email" name="lastname" placeholder="Email">
              <input type="text" id="telp" name="lastname" placeholder="Telephone">
              <textarea id="subject" name="subject" placeholder="Your Message"></textarea>
              <input type="submit" value="Submit">
            </aside>
          </div>
        </div>
      </section>
      <!-- akhir contact us -->
  
      <!-- alamat -->
      <section class="alamat" id="alamat">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h2>Alamat kami</h2>
              <p>Perumahan Bukit Sawangan Indah, Blok D 19 Nomor 3, RT/RW 012/005, 
                Kelurahan, Duren Mekar, Bojongsari, Depok City, West Java 16518</p>
              </div>
              <div class="col-sm-6 text-center">
                <iframe src="https://maps.google.com/maps?q=Perumahan%20Bukit%20Sawangan%20Indah,%20Blok%20D%2019%20Nomor%203,%20RT/RW%20012/005,%20Kelurahan,%20Duren%20Mekar,%20Bojongsari,%20Depok%20City,%20West%20Java%2016518&t=&z=17&ie=UTF8&iwloc=&output=embed" width="90%" height="300px" object-fit="cover" object-position="center" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
          </div>
        </div>
      </section>
      <!-- akhir alamat -->
  
      <!-- keranjang -->
      <section id="keranjang" class="keranjang">
        <!--Section: Block Content-->
        <div class="container">
        <!--Grid row-->
          <div class="row ml-2">
            <!--Grid column-->
            <div class="col-lg-4">
              <!-- Card -->
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="mb-4">Cart</h5>
                  <span></span>
                  <div class="form-check mb-3">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    <label class="form-check-label" for="inlineCheckbox1">Pilih Semua</label>
                    <h6>Hapus</h6>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                    <label class="form-check-label" for="inlineCheckbox1">Pilih</label>
                    </div>
                  <div class="row mb-4">              
                    <div class="col-md-5 col-lg-3 col-xl-3">
                      <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                          <div class="mask waves-effect waves-light">
                            <img class="img-fluid w-100"
                              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
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
                <div class="subtotal">
                  <h5>Subtotal  :</h5>
                </div>
                <a class="btn tombol-checkout">Checkout</a>
              </div>
              <!-- Card -->
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
      </section>
    <!--Section: Block Content-->  
    <!-- akhir keranjang -->
  
@endsection