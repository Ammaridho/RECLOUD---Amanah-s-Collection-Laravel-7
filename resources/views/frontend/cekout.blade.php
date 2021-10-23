<body>
    <div class="container mt-5">
        <div class="row p-3">

            <div class="col-md-8">
                <div class="row">
                    {{-- pengiriman --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                            <h3>Pengiriman {{$emailcustomer}}</h3>

                            <div class="form-group row">
                                <div class="col">
                                    <button id="salinDataUtama">salin</button>
                                    <label for="">Salin Data Utama</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="namaLengkap" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamatt" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col">
                                    <textarea name="alamat" id="alamatt" cols="30" rows="10" style="min-width: 100%"></textarea>
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
                                <label for="emaill" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="emaill" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="metodePengiriman" class="col-sm-2 col-form-label">Metode Pengiriman</label>
                                </div>
                                <div class="col-4">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected>Choose...</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control" id="pilihOngkir" placeholder="" disabled>
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
                                <label for="bankTujuan" class="col-sm-2 col-form-label">Pilih bank Tujuan</label>
                                <div class="col-sm-10" id="bankTujuan">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="123456RidhoBni">
                                        <label class="form-check-label" for="inlineRadio1">Bank BNI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="789202RidhoBri">
                                        <label class="form-check-label" for="inlineRadio2">Bank BRI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="999999RidhoBca">
                                        <label class="form-check-label" for="inlineRadio3">Bank BCA</label>
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
                    {{-- keranjang --}}
                    <div class="col">
                        <div class="box border border-dark p-3 m-2">
                        <h3>Keranjang</h3>
                        </div>
                    </div>
                </div>

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
                                    <label for="uangJaminan" class="col-sm-2 col-form-label">Uang Jaminan 30%</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="uangJaminan" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="ongkir" class="col-sm-2 col-form-label">Ongkos Kirim</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="ongkir" placeholder="">
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
                    <div class="col text-center">
                        <button>Bayar</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>