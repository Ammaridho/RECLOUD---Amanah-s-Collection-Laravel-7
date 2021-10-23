<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Cekout test</title>
  </head>
  <body>
    <div class="container">
        <div class="row p-3">

            <div class="col-md-8">
                <div class="row">
                    {{-- pengiriman --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                            <h3>Pengiriman</h3>

                            <div class="form-group row">
                                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaLengkap" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col">
                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                            <label for="">Alamat Utama</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <textarea name="alamat" id="alamat" cols="30" rows="10" style="min-width: 100%"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kodePos" class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="kodePos" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noTelp" class="col-sm-2 col-form-label">No. Telp </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="noTelp" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="metodePengiriman" class="col-sm-2 col-form-label">Metode Pengiriman</label>
                                <div class="col dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="metodePengiriman" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- pembayaran --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                            <h3>Pembayaran</h3>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Pilih bank Tujuan</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" aria-label="radio for following text input">
                                            <label for="">Bank BNI</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" aria-label="radio for following text input">
                                            <label for="">Bank BRI</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" aria-label="radio for following text input">
                                            <label for="">Bank Mandiri</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="noRek" class="col-sm-2 col-form-label">No. Rekening</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="noRek" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="namaRek" class="col-sm-2 col-form-label">Nama Rekening</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="namaRek" placeholder="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            
            <div class="col-md-4">

                <div class="row">
                    {{-- rincian --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                            <h3>Rincian</h3>
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="biayaPenyewaan" class="col-sm-2 col-form-label">Biaya Penyewaan</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="biayaPenyewaan" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="ongkir" class="col-sm-2 col-form-label">Ongkos Kirim</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="ongkir" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="ongkir" class="col-sm-2 col-form-label">Ongkos Kirim</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="ongkir" placeholder="">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="totalTagihan" class="col-sm-2 col-form-label">Total Tagihan</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="totalTagihan" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- keranjang --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                        <h3>Keranjang</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <button>Bayar</button>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>