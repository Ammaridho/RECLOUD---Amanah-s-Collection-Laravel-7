<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}"> 

    <title>Amanah's Collection</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleberanda.css">
    <script src="js/jquery-3.6.0.js"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body class="beranda">
  
  <!-- form login/signup -->
  <div class="kotakhitam" id="kotakhitam">
    <div class="kotakrelative">

        <!-- login -->
        <div class="kotaklogin" id="kotaklogin">
            <div class="kotakputih" id="kotakputih">
                <div class="formlogin" id="formlogin">
                    <div class="judul">
                        <h1>Masuk</h1>
                        <i class="fa fa-times" onclick="Tombolcloselogin()"></i>
                    </div>
                    <form name="login" action="/login" id="login" method="POST">

                      @csrf

                        <div class="form-row">
                            <input type="text" id="email" onkeyup="ValidateInputan()" name="email" required>
                            <span id="tulisanemaillogin">Email</span>
                        </div>
                        <div class="form-row">
                            <input type="password" id="password" onkeyup="ValidateInputan()" name="password" required>
                            <span id="tulisanpasswordlogin">Password</span>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn-success">Masuk</button>
                        </div>
                    </form>
                    <p><span onclick="Gantidaftar()">Daftar</span> jika belum memiliki akun</p>
                </div>
            </div>
        </div>
        <!-- akhir login -->

        <!-- signup -->
        <div class="kotakdaftar" id="kotakdaftar">
            <!-- multistep form -->
            <form id="msform" action="/signup" method="POST" enctype="multipart/form-data">

              @csrf

                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="step">Setup Akun</li>
                    <li class="step">Data Pribadi</li>
                    <li class="step">Verifikasi Data</li>
                </ul>
                <div class="putih">
                    <i class="fa fa-times" onclick="Tombolclosedaftar()"></i>
                    <!-- fieldsets -->
                    <fieldset class="tab">
                        <h2 class="fs-title">Buat Akun</h2>
                        <h3 class="fs-subtitle">Data akan digunakan ketika masuk ke akun</h3>
                        <div class="form-row">
                            <input type="text" name="email" required>
                            <span id="tulisanemaillogin">Email</span>
                        </div>
                        <div class="form-row">
                            <input type="password" id="password1" name="password1" required>
                            <span id="tulisanpassworddaftar">Password</span>
                        </div>
                        <div class="form-row">
                            <input type="password" id="password2" name="password2" required>
                            <span id="tulisanconpassword">Konfirmasi Password</span>
                        </div>
                    </fieldset>
                    <fieldset class="tab">
                        <h2 class="fs-title">Data Diri</h2>
                        <h3 class="fs-subtitle">Data menjadi profil dan akan digunakan ketika transaksi</h3>
                        <div class="form-row">
                            <input type="text" name="nama" required>
                            <span id="tulisannamalengkap">Nama Lengkap</span>
                        </div>
                        <div class="form-row">
                            <textarea cols="30" rows="3" id="alamat" name="alamat" required></textarea>
                            <span id="tulisanalamat">Alamat</span>
                        </div>
                        <div class="form-row">
                          <input type="number" name="kodepos" required>
                          <span id="tulisankodepos">Kode Pos</span>
                        </div>
                        <div class="form-row">
                            <input type="number" name="notelp" required>
                            <span id="tulisannotelp">Nomor HP</span>
                        </div>
                    </fieldset>
                    <fieldset class="tab">
                        <h2 class="fs-title">Verivikasi Data</h2>
                        <h3 class="fs-subtitle">Data ini akan dijadikan jaminan ketika transaksi</h3>
                        <div class="form-row">
                            <input type="number" name="noktp" required>
                            <span id="tulisannoktp">Nomor KTP</span>
                        </div>
                        <div class="form-row">
                            <label for="fotoKtp">Foto Ktp</label>
                            <input class="form-control-file" type="file" name="fotoKtp" id="fotoKtp" value="" required>
                        </div>
                        <div class="form-row">
                            <label for="fotoBersamaKtp">Foto diri dengan Ktp</label>
                            <input class="form-control-file" type="file" name="fotoBersamaKtp" id="fotoBersamaKtp" value="" required>
                        </div>
                    </fieldset>
                    <div class="pencetan">
                        <button type="button" id="prevBtn" style="background-color: #dbdbdb;" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                    <p><span onclick="Gantilogin()">Masuk</span> jika sudah memiliki akun</p>
                </div>
            </form>
        </div>

    </div>
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <div class="container">

        <a class="navbar-brand">Amanah Collection</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/">Home</a>
            <span class="sr-only">(current)</span>

            @if (session('success_login'))
              <a class="nav-item nav-link" href="/pulau">For-rent</a>
            @endif

            <a class="nav-item nav-link" href="/#contact">Contact</a>
            
            <?php 

              $emailsession = 'belum login';

              if(isset(session('data')['email'])){
                $emailsession = session('data')['email'];
              } 
            ?>
            @if (session('success_login'))
              <div class="dropdown nav-item">
                <button id="buttonKeranjang" class="btn dropdown-toggle nav-link" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="{{$emailsession}}">
                  Keranjang
                </button>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <div class="listKeranjang" id="listKeranjang"></div>
                </div>
              </div>

              <div class="dropdown nav-item">
                <button id="buttonKeranjang" class="btn dropdown-toggle nav-link" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="{{$emailsession}}">
                  Transaksi
                </button>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <div class="listKeranjang" id="listKeranjang"></div>
                </div>
              </div>
            @endif
            

            @if (!session('success_login'))
              <a class="nav-item  btn btn-primary nav-link" onclick="Tombollogin()">Login</a>
            @else
              <div class="dropdown nav-item">
                <a id="buttonKeranjang" class="btn dropdown-toggle nav-link" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{$emailsession}}
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="btn tombol" onclick="logout()">Logout</a>
                </div>
              </div>

            @endif

          </div>
        </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keranjang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modalEditKeranjang"></div>
      </div>
    </div>
  </div>

  <div class="contentUtama">
    @yield('content')
  </div>
  

  <!-- footer -->
  <footer class="footer-area footer--light">
    <div class="mini-footer">
      <div class="container">
        <div class="row p-3">
          <div class="col-md-12">
              <p class="text-center m-auto ">© 2021 Amanah Collection</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir -->

</body>
    <script src="bst4/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    
</html>