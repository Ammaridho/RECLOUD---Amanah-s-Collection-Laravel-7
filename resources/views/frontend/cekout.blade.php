{{-- @extends('layouts.mainristrict')

@section('name') --}}
<body>
    <div class="container mt-5">

        <form id="formcek" action="{{route('rincianCekout')}}" method="get">

            @csrf

            <div class="row pt-4">

                <div class="col-md-8">
                    
                    <div class="row">

                        <input type="hidden" name="customer_email" id="customer_email" value="{{session('data')['email']}}">

                        {{-- pengiriman --}}
                        <div class="col">
                            <div class="box border border-dark p-3 m-2">
                                <h3>Pengiriman</h3>

                                <div class="form-group row">
                                    <div class="col">
                                        <button type="button" id="salinDataUtama">salin</button>
                                        <label for="">Salin Data Utama</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaLengkap" name="nama" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamatt" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col">
                                        <textarea name="alamat" id="alamatt" cols="30" rows="3" style="min-width: 100%"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kodePos" class="col-sm-2 col-form-label">Kode Pos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kodePos" name="kodePos" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="noTelp" class="col-sm-2 col-form-label">No. Telp </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="emaill" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="emaill" name="emaill" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="metodePengiriman" class="col-sm-2 col-form-label">Metode Pengiriman</label>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control" id="pilihkurir" name="pilihkurir">
                                            <option value="Pilih metode pengiriman..">Pilih..</option>
                                            <option value="Gosend">Gosend</option>
                                            <option value="Grab Express">Grab Express</option>
                                        </select>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="hargaOngkir" name="hargaOngkir" placeholder="Pilih metode pengiriman.." disabled>
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
                                            <input class="form-check-input" type="radio" name="bankTujuan" id="inlineRadio1" value="Bank BNI">
                                            <label class="form-check-label" for="inlineRadio1">Bank BNI</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bankTujuan" id="inlineRadio2" value="Bank BRI">
                                            <label class="form-check-label" for="inlineRadio2">Bank BRI</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bankTujuan" id="inlineRadio3" value="Bank BCA">
                                            <label class="form-check-label" for="inlineRadio3">Bank BCA</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="noRek" class="col-sm-2 col-form-label">No. Rekening</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="noRek" name="noRek" placeholder="Pilih bank tujuan.." disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="namaRek" class="col-sm-2 col-form-label">Nama Rekening</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="namaRek" name="namaRek" placeholder="Pilih bank tujuan.." disabled>
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

                              {{-- INI MASI BELUM BAGAIMANA ARRAY BISA MASUK JADI VALUE YANG HARUSNYA SATU NILAI, ARRAY BANYAK NILAI DIDALAMNYA--}}

                                {{-- isi keranjang --}}
                                <div class="row">
                                    <div class="col">
                                    <div class="isiKeranjang" style="height: 400px; overflow-y:scroll; border: 1px solid rgb(185, 185, 185);">
                                        <?php 
                                            $ukur = count($arrayNamaBaju); 
                                            $total = 0;
                                        ?>


                                        @for ($i = 0; $i < count($keranjang_id); $i++)
                                            <input type="hidden" class="keranjang_id" name="listkeranjang_id[]" value="{{$keranjang_id[$i]}}">
                                        @endfor
                                        
                                        @for ($i = $ukur-1; $i >= 0; $i--)


                                            {{-- DISINI MASIH BERMASALAHHH ID KERANJANG YANG DI AMBIL SAAT CEK OUT DETAIL BELUM BENAR --}}
                                            
                                            <!-- Card -->
                                            <div class="card mb-3 checkboxsatusatu">
                                            
                                                <div class="card-body">
                        
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
                                        <input type="text" class="form-control" id="biayaPenyewaan" name="biayaPenyewaan" value="{{$total}}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <label for="uangJaminan" class="col-sm-2 col-form-label">Uang Jaminan 30%</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="uangJaminan" name="uangJaminan" value="{{$total * 30/100}}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <label for="ongkir" class="col-sm-2 col-form-label">Ongkos Kirim</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="ongkir" name="ongkir" placeholder="Pilih metode pengiriman.." disabled>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <label for="totalTagihan" class="col-sm-2 col-form-label">Total Tagihan</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="totalTagihan" name="totalTagihan" placeholder="" value="" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>

            </div>

            <div class="row">
                <div class="col text-center mb-3">
                    <button type="button" id="buttonBayar">Lanjut Bayar</button>
                </div>
            </div>

        </form>    

    </div>
</body>
<script>
    var customerNama    = "{{$customer->nama}}";
    var alamat          = "{{$customer->alamat}}";
    var kodepos         = "{{$customer->kodepos}}";
    var notelp          = "{{$customer->tlp}}";
    var email           = "{{$customer->email}}";

    $('#salinDataUtama').on('click',function () {
        $('#namaLengkap').val(customerNama);
        $('#alamatt').val(alamat);
        $('#kodePos').val(kodepos);
        $('#noTelp').val(notelp);
        $('#emaill').val(email);
    })
</script>
{{-- @endsection --}}
