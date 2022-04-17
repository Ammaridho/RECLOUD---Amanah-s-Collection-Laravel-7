<?php 
  $hargaBaju = $detail['harga_baju'];

  $keranjang_id = $isiKeranjang->id;
  $ukuran_atasan = $isiKeranjang->ukuran_atasan;
  $ukuran_bawahan = $isiKeranjang->ukuran_bawahan;
  $banyak = $isiKeranjang->jumlah;
  $tanggal_mulai = $isiKeranjang->tanggal_mulai;
  $tanggal_selesai = $isiKeranjang->tanggal_selesai;
?>
{{-- <body> --}}

  <div class="container text-center">

    <div class="row">
      <div class="col-sm-12">
          <div class="text-light" id="isikeranjang"></div>
          <?php //var_dump($id_keranjang);?>
      </div>
    </div>

    <div class="row">
      <div class="namda col-sm-12 mt-3">
        {{-- <a href="javascript:void(0)" class="closebtn" id="backToMenu">&times;</a> --}}
        {{-- <h1>{{$detail->nama_tari}}</h1> --}}
        <?php
          // var_dump($detail['nama_tari']);
          if($detail['jenis_baju'] == 'Baju Tari'){
            $namaTari = $detail['nama_tari'];
            echo "<h2>$namaTari</h2>";
          }else{
            $jenisBaju = $detail['jenis_baju'];
            echo "<h2>$jenisBaju</h2>";
          }
        ?>
      </div>
    </div> 

    <div class="row">

      <div class="col-xl-5">

        <div class="row">

          <div class="col-xl-6">
            <img src="img/gambarbaju/<?= $detail['gambar'];?>" class="rounded-circle text-center" width="150px">
          </div>

          <div class="col-xl-6">
            <h3><?= $detail['nama_baju'];?></h3>
            <h4><?= $detail['jenis_kelamin'];?></h4>
            <h5><?= $detail['harga_baju'];?></h5>
          </div>

        </div>

        <div class="row">

          <div class="top-content">
            <div class="container-fluid">
              <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                

                  <?php
                  foreach($arrayGambar as $d):?>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                      <img src="img/gambarbaju/<?= $d['gambar'];?>" class="img-fluid mx-auto d-block" alt="img3">
                  </div>
                  <?php endforeach;?>

                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="img/FUNNYYOU.png" class="img-fluid mx-auto d-block" alt="img1">
                  </div>

                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        
          <table class="table table-dark w-1 mt-2" style="font-size: 12px; height:200px">
            <thead>
              <tr class="sticky-top bg-dark">
                <th scope="col" style="width: 20vw">No</th>
                <th scope="col" style="width: 80vw">Nama</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <th scope="row">1</th>
                <td><?= $keterangan['nama_atasan'];?></td>
              </tr>

              <tr>
                <th scope="row">2</th>
                <td><?= $keterangan['nama_bawahan'];?></td>
              </tr>

              <?php 
              $df=3;
              foreach($daftarAksesoris as $da):?>
              <tr>
                <th scope="row"><?= $df++; ?></th>
                <td><?= $da['nama_aksesoris'];?></td>
              </tr>
              <?php endforeach; ?>

            </tbody>
          </table>   
        </div>

      </div>

      <div class="col-xl-7 pt-2">

          <table class="table table-hover bg-light listUkuran" style="height:180px" id="listUkuran" >
            <thead class="thead-dark">
              <tr>
                <h5 class="text-white"> Atasan </h5>
              </tr>
              <tr class="sticky-top bg-dark">
                <th scope="col" style="width: 20vw">No</th>
                <th scope="col" style="width: 20vw">Ukuran</th>
                <th scope="col" style="width: 20vw">Lingkar</th>
                <th scope="col" style="width: 20vw">Panjang</th>
                <th scope="col" style="width: 20vw">Lebar</th>
                <th scope="col" style="width: 20vw">Persediaan</th>
              </tr>
            </thead>
            <tbody>
              <?php $iatas=1;              
              foreach($arrayChartAtasan as $d):?>
              <tr>
                <td><?= $iatas;?></td>
                <td><?= $d['ukuran_atasan'];?></td>
                <td><?= $d['lingkar_badan'];?></td>
                <td><?= $d['panjang_lengan'];?></td>
                <td><?= $d['lebar_dada'];?></td>
                <td><?= $d['persediaan_atasan'];?></td>
              </tr>
              <?php $iatas++;?>
              <?php endforeach; ?>
            </tbody>
          </table>      
          
          <table class="table table-hover bg-light listUkuran" style="height:180px" id="listUkuran">
            <thead class="thead-dark">
              <tr>
                <h5 class="text-white"> Bawahan </h5>
              </tr>
              <tr class="sticky-top bg-dark">
                <th scope="col" style="width: 20vw">No</th>
                <th scope="col" style="width: 20vw">Ukuran</th>
                <th scope="col" style="width: 20vw">Lingkar</th>
                <th scope="col" style="width: 20vw">Panjang</th>
                <th scope="col" style="width: 20vw">Persediaan</th>
              </tr>
            </thead>
            <tbody>
              <?php $ibawah=1; 
              foreach($arrayChartBawahan as $d):?>
              <tr>
                <td><?= $ibawah;?></td>
                <td><?= $d['ukuran_bawahan'];?></td>
                <td><?= $d['lingkar_pinggang'];?></td>
                <td><?= $d['panjang_kaki'];?></td>
                <td><?= $d['persediaan_bawahan'];?></td>
              </tr>
              <?php $ibawah++;?>
              <?php endforeach; ?>
            </tbody>
          </table> 

      </div>
    </div>  

    <form name="form-detail" id="formEditKeranjang" method="POST" action="">

      @csrf

      <input type="hidden" name="keranjang_id" value="<?= $keranjang_id; ?>">

      <input type="hidden" name="id" value="<?= $id; ?>">

      <input type="hidden" name="customer_email" value="{{session('data')['email']}}">


      <div class="row">

        <!-- form input ukuran -->
        <div class="col-md-7">       
                  
          <div class="formperhitungan" id="forminputukuran">
            <h5>Ukuran Masing Masing set Baju</h5>
          </div>

          {{-- untuk mengambil array hasil dan dikirimkan ke contollernya --}}
          <input type="hidden" name="ukuranBaju" id="ukuranBaju">

          <!-- form input ukuran lebih dari satu -->
          <button type="button" class="btn btn-secondary bajutanggal" style="width: 10%" href="javascript:void()" onclick="formUkuran(1,'{{$id}}','{{$keranjang_id}}')">+</button>
          <!-- akhir form input ukuran lebih dari satu -->

        </div>
        <!-- akhir form input ukuran -->

        <!-- form input tanggal -->
        <div class="formkanan col-md-5">
          <h3 style="text-align: left; color: gold;">Catatan:</h3>
          <p style="color: gold;">Harga yang tertera untuk penyewaan dalam jangka waktu perhari</p>
          <h4 style="text-align: left;">Tanggal Penyewaan:</h4>

          <div class="formtanggal formperhitungan">
            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label text-white">Mulai</label>
              <div class="col-10">
                <?php date_default_timezone_set("Asia/Jakarta");?>
                <input  id="tanggal_mulaiEdit" class="form-control bajutanggal" type="date" name="tanggal_mulaiEdit" min="<?= date("Y-m-d");?>" value="<?= $tanggal_mulai; ?>" id="datePicker">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label text-white">Selesai</label>
              <div class="col-10">
                <input id="tanggal_selesaiEdit" class="form-control bajutanggal" type="date" name="tanggal_selesaiEdit" min="<?= date("Y-m-d");?>" value="<?= $tanggal_selesai; ?>" id="datePicker">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-6 col-form-label text-white">Banyak Baju</label>
            <div class="col-6 banyakBajuEdit"><h5>Silahkan Atur Baju</h5></div>
            {{-- mengambil dan mengirim banyakBajuEdit ke controller --}}
            <input type="hidden" name="banyakBajuSajaEdit" id="banyakBajuSajaEdit">
          </div>

          <div class="form-group row">
            <label for="example-date-input" class="col-6 col-form-label text-white">Lama Penyewaan</label>
            <div class="col-6 totalHariEdit"><h5>Silahkan Atur Tanggal</h5></div>
            {{-- mengambil dan mengirim lama sewa ke controller --}}
            <input type="hidden" name="totalHariSajaEdit" id="totalHariSajaEdit">
          </div>

          <div class="row">
            <div class="col-12 totalBiayaSajaEdit text-center"></div>
            <input type="hidden" name="totalBiayaSajaEdit" id="totalBiayaSajaEdit">
          </div>
          
          
        </div>
        <!-- akhir form input tanggal -->

      </div>

      <div class="row ">
        <div class="col tombolckc">
          <button type="button" class="btn btn-primary ckc">C</button>
          <button type="button" class="btn btn-primary ckc">T</button>
          <button type="submit" class="btn btn-primary ckc">Cekout</button>
        </div>
      </div>

    </form>

  </div>
{{-- </body>   --}}
 

<script>

  // store data dengan ajax
  $('#formEditKeranjang').on('submit',function(){
    event.preventDefault();

    const konfirm = confirm('yakin masukkan keranjang?');

    if (konfirm) {

      $.ajax({
        type: 'POST',
        url: "{{ route('storeEditKeranjang') }}",
        data: $(this).serialize(),
        success: function (data) {
          alert('berhasil');
          closeSidebar();
          $('#formDetailInput').trigger("reset");
          
        },
        error: function (data) {
          console.log(data);
          alert('Masukkan Data dengan Lengkap!');
        }
      })
      
    }

  })

 //menambah form ukuran
 var fu = 0 ;
  function formUkuran(tambah,id,keranjang_id){
    fu = fu + tambah;
    $.get("{{route('editUkuran')}}",{fu:fu,id:id,keranjang_id:keranjang_id}, function(data){
      $("#forminputukuran").html(data);
    });

    let totalbaju = fu;
    const kesimpulantotalbaju = `<h5>${((totalbaju == 0) ? 'Silahkan Atur Baju' : totalbaju+' Baju')}</h5>`;
  
    document.querySelector('.banyakBajuEdit').innerHTML = kesimpulantotalbaju;
  
    document.getElementById('banyakBajuSajaEdit').value = totalbaju;
    
    $('.bajutanggal').on("click change",function () {
      //akumulasi
        totalBiaya(totalbaju, totalHari());
    })

  }

  const hargaBaju = {{ $hargaBaju }};

  //total hari
  function totalHari(){
    if(($('#tanggal_mulaiEdit').val() != '') && ($('#tanggal_selesaiEdit').val() != '')){
        
      var oneDay = 24*60*60*1000;

      var tanggal_mulai   = new Date($('#tanggal_mulaiEdit').val());
      var tanggal_selesai = new Date($('#tanggal_selesaiEdit').val());
      
      var diffTanggal = Math.round(Math.round((tanggal_selesai.getTime() - tanggal_mulai.getTime()) / (oneDay)));
      
      const kesimpulanLama = `<h5>${((diffTanggal == 0) ? 'Silahkan Atur Tanggal' : diffTanggal+' Hari')}</h5>`;
      
      document.querySelector('.totalHariEdit').innerHTML = kesimpulanLama;

      document.getElementById('totalHariSajaEdit').value = diffTanggal;
      
      return diffTanggal;

    }
  }

  //total biaya
  function totalBiaya(totalbaju,diffTanggal){
    var total = totalbaju * diffTanggal * hargaBaju;

    const kesimpulantotalbiaya = `<h5>Total Biaya : Rp. ${total},00</h5>`;

    document.querySelector('.totalBiayaSaja').innerHTML = kesimpulantotalbiaya;

    document.getElementById('totalBiayaSajaEdit').value = total;
  }
  

  $('#backToMenu').on('click', function(){

    let baju = $('#banyakBajuSajaEdit').val();
    let lama = $('#totalHariSajaEdit').val();
    
    if( baju > 0 || lama > 0 ){
      const konfirmasi = confirm("Yakin Keluar?");
  
      if(konfirmasi == true){
        backToMenu();
      }

    }else{
      backToMenu();
    }
    
  });


</script>
  