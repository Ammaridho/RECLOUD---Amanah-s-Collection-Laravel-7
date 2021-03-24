<?php 

require 'functions.php';

  $id_baju = $_GET['id_baju'];

  //seleksi tari atau bukan
  $seleksi = tampil1("SELECT * FROM baju WHERE baju.id_baju = $id_baju");

  if($seleksi['jenis_baju'] == 'Baju Tari'){
      $detail = tampil1("SELECT * FROM ((baju INNER JOIN gambar_baju ON baju.id_baju = gambar_baju.id_baju)
                                              INNER JOIN tari ON baju.id_baju = tari.id_baju) WHERE baju.id_baju = $id_baju");
  }else{
      $detail = tampil1("SELECT * FROM baju INNER JOIN gambar_baju ON baju.id_baju = gambar_baju.id_baju WHERE baju.id_baju = $id_baju");
  }

  //gambar baju
  $arrayGambar = query("SELECT gambar FROM gambar_baju WHERE id_baju = $id_baju");
  
  //chart atasan
  $arrayChartAtasan = query("SELECT * FROM baju INNER JOIN chart_atasan ON baju.id_atasan = chart_atasan.id_atasan WHERE id_baju = $id_baju");
  
  //chart bawahan
  $arrayChartBawahan = query("SELECT * FROM baju INNER JOIN chart_bawahan ON baju.id_bawahan = chart_bawahan.id_bawahan WHERE id_baju = $id_baju");
  
  //keterangan lengkap
  $keterangan = tampil1("SELECT * FROM ((((baju INNER JOIN atasan_baju ON baju.id_atasan = atasan_baju.id_atasan) 
                                                INNER JOIN bawahan_baju ON baju.id_bawahan = bawahan_baju.id_bawahan) 
                                                INNER JOIN kode_aksesoris ON baju.kode_aksesoris = kode_aksesoris.kode_aksesoris)
                                                INNER jOIN aksesoris_baju ON kode_aksesoris.id_aksesoris = aksesoris_baju.id_aksesoris) WHERE id_baju = $id_baju");

  $daftarAksesoris = query("SELECT * FROM ((baju INNER JOIN kode_aksesoris ON baju.kode_aksesoris = kode_aksesoris.kode_aksesoris)
                                           INNER jOIN aksesoris_baju ON kode_aksesoris.id_aksesoris = aksesoris_baju.id_aksesoris) WHERE id_baju = $id_baju");
    // var_dump($_GET['id_baju']);
    // var_dump($detail['jenis_baju']);
?>

<body>

<div class="container text-center">

    <div class="row">
      <div class="namda col-sm-12 mt-3">
        <a href="javascript:void(0)" class="closebtn" onclick="closeDetail()">&times;</a>
        <?php
          // var_dump($detail['jenis_baju']);
          if($detail['jenis_baju'] == 'Baju Tari'){
            $namaTari = $detail['nama_tari'];
            echo "<h2>$namaTari </h2>";
          }else{
            $jenisBaju = $detail['jenis_baju'];
            echo "<h2>$jenisBaju </h2>";
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
                  

                    <?php foreach($arrayGambar as $d):?>
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
                <th scope="col" style="width: 20vw">Persediaan</th>
              </tr>
            </thead>
            <tbody>
              <?php $iatas=1; ?>
              <?php foreach($arrayChartAtasan as $d):?>
              <tr>
                <td><?= $iatas;?></td>
                <td><?= $d['ukuran_atasan'];?></td>
                <td><?= $d['lingkaratasan'];?></td>
                <td><?= $d['panjangatasan'];?></td>
                <td><?= $d['persediaan'];?></td>
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
              <?php $ibawah=1; ?>
              <?php foreach($arrayChartBawahan   as $d):?>
              <tr>
                <td><?= $ibawah;?></td>
                <td><?= $d['ukuran_bawahan'];?></td>
                <td><?= $d['lingkarbawahan'];?></td>
                <td><?= $d['panjangbawahan'];?></td>
                <td><?= $d['persediaan'];?></td>
              </tr>
              <?php $ibawah++;?>
              <?php endforeach; ?>
            </tbody>
          </table> 

      </div>
    </div>  

    

    <div class="row">
      
      <!-- form input ukuran -->
      <div class="col-md-7">
        
        <div class="input-group mb-3" method="get" >

          <button type="button" class="btn btn-secondary" style="width: 10%" >x</button>

          <select class="custom-select" id="inputGroupSelect02" style="width: 30%">
              <option selected>Ukuran Baju..</option>
              <?php foreach($arrayChartAtasan as $a): ?>
              <option value="<?= $a['ukuran_atasan'];?>"><?= $a['ukuran_atasan'];?></option>
              <?php endforeach;?>
          </select>

          <select class="custom-select" id="inputGroupSelect02" style="width: 30%">
              <option selected>Ukuran Celana/Rok..</option>
              <?php foreach($arrayChartBawahan as $b):?>
              <option value="<?= $b['ukuran_bawahan'];?>"><?= $b['ukuran_bawahan'];?></option>
              <?php endforeach;?>
          </select>

          <input type="number" class="form-control" style="width: 15%">

        </div>

        <div id="inputukuran"></div>
                <?php $no = 0; ?>
        <button type="button" class="btn btn-secondary" name="tambah" style="width: 10%" href="javascript:void()" onclick="inputUkuran('<?= $no; ?>')">+</button>

      </div>
       <!-- akhir form input ukuran -->


      <!-- form input tanggal -->
      <div class="col-md-5">
        <h3 style="text-align: left; color: gold;">Catatan:</h3>
        <p style="color: gold;">Harga yang tertera untuk penyewaan dalam jangka waktu perhari</p>
        <h4 style="text-align: left;">Tanggal Penyewaan:</h4>
        <div class="form-group row">
          <label for="example-date-input" class="col-2 col-form-label text-white">Date</label>
          <div class="col-10">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-date-input" class="col-2 col-form-label text-white">Date</label>
          <div class="col-10">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
          </div>
        </div>
        <h4 style="text-align: left;">Total:</h4>
        <div class="badge badge-warning text-wrap" style="width: 100%; height: 23px; font-size: medium;">
          0 = Rp.0
        </div>
      </div>
    </div>

    <div class="row ">
      <div class="col tombolckc">
        <button type="button" class="btn btn-primary ckc">C</button>
        <button type="button" class="btn btn-primary ckc">T</button>
        <button type="button" class="btn btn-primary ckc">Cekout</button>
      </div>
    </div>

  </div>
  
</body>  

<script>
function inputUkuran(isi){
  $.get("inputUkuran.php",{isi:isi},function(data) {
        $("#inputukuran").html(data);
    });
}

</script>
  