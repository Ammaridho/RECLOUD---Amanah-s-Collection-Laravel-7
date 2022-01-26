<body>

    <div class="container pt-4">
        
        <div class="row p-3 mt-5 text-center border">
            <div class="col">
                <h1>Status : Menunggu proses pembayaran</h1>
            </div>
        </div>

        <div class="row p-3 mt-3 text-center border">
            <div class="col">
                <h1>Pembayaran</h1>
                <h4>Batas Pembayaran</h4>
                <h5>10/12/2022</h5>
            </div>
        </div>

        <div class="row p-3 mt-3 text-center border">
            <div class="col">
                <h1>Transfer </h1>
                <h4>Rekening Tujuan</h4>
                <h5>Jumlah</h5>
            </div>

            <div class="col">
                <h1>{{$namaRek}}</h1>
                <h4>{{$noRek}}</h4>
                <h5>Rp.{{$totalTagihan}}</h5>
            </div>
        </div>

        <div class="row p-3 mt-3 text-center border">
            <div class="row m-auto ">
                {{-- rincian --}}
                <div class="col">
                    <div class="box border border-dark p-3 m-2">
                        <h3>Rincian</h3>
                        <div class="form-group row mt-3">
                            <div class="col-sm-5">
                                <label for="biayaPenyewaan" class="">Biaya Penyewaan</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control text-center" id="biayaPenyewaan" name="biayaPenyewaan" value="Rp.{{$biayaPenyewaan}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-5">
                                <label for="uangJaminan" class="">Uang Jaminan 30%</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control text-center" id="uangJaminan" name="uangJaminan" value="Rp.{{$uangJaminan}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-5">
                                <label for="ongkir" class="">Ongkos Kirim</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control text-center" id="ongkir" name="ongkir" value="Rp.{{$ongkir}}" disabled>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <div class="col-sm-5">
                                <label for="totalTagihan" class="">Total Tagihan</label>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control text-center" id="totalTagihan" name="totalTagihan" value="Rp.{{$totalTagihan}}" disabled>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col">
                <a href="/"><button>Home</button></a>
            </div>
        </div>
    </div>
</body>