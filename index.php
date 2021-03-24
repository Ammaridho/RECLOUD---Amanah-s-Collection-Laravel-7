<?php
require 'functions.php';
//untuk menu ======================================================================================================================
//untuk keterangan provinsi


// if(isset($_GET['provinsi'])){
//   $id_provinsi = $_GET['provinsi'];
// }
// else{
//   $id_provinsi = 1;
// }

// // var_dump($_GET['provinsi']);
// var_dump($id_provinsi);

// $provinsi = tampil1("SELECT * FROM provinsi where id_provinsi = $id_provinsi");

// //untuk list daftar baju
// $jenis_baju = 'Baju Tari';

// $baju = query("SELECT * FROM baju WHERE id_provinsi = $id_provinsi AND jenis_baju = '$jenis_baju'");

// $semuaTari = query("SELECT * FROM baju INNER JOIN tari ON baju.id_baju = tari.id_baju WHERE id_provinsi = $id_provinsi AND jenis_baju = '$jenis_baju'");

// $pilih_tari = 'Tari Saman';

// $fokusTari = query("SELECT * FROM baju INNER JOIN tari ON baju.id_baju = tari.id_baju WHERE id_provinsi = $id_provinsi AND jenis_baju = '$jenis_baju' AND nama_tari = '$pilih_tari'");


//untuk detail ====================================================================================================================
// $id_baju = 1;

// //keterangan identitas baju
// $detail = tampil1("SELECT * FROM baju INNER JOIN gambar_baju ON baju.id_baju = gambar_baju.id_baju WHERE baju.id_baju = $id_baju");

// //gambar baju
// $arrayGambar = query("SELECT gambar FROM gambar_baju WHERE id_baju = $id_baju");

// //chart atasan
// $arrayChartAtasan = query("SELECT * FROM baju INNER JOIN chart_atasan ON baju.id_atasan = chart_atasan.id_atasan WHERE id_baju = $id_baju");

// //chart bawahan
// $arrayChartBawahan = query("SELECT * FROM baju INNER JOIN chart_bawahan ON baju.id_bawahan = chart_bawahan.id_bawahan WHERE id_baju = $id_baju");

// //keterangan lengkap
// $keterangan = tampil1("SELECT * FROM ((baju INNER JOIN atasan_baju ON baju.id_atasan = atasan_baju.id_atasan) 
//                                             INNER JOIN bawahan_baju ON baju.id_bawahan = bawahan_baju.id_bawahan) WHERE id_baju = $id_baju");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleButtonProvinsi.css">
    <link rel="stylesheet" href="script.js">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>

<body>
  
  <!-- navbar -->
  <section class="navbar" id="navbar">
    <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
      <a class="navbar-brand mr-auto" href="#">Amanah's Collection</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link" href="#">Home </a>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Input
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button" href="javascript:void()" onclick="inputProvinsi()">Provinsi</a></button>
              <button class="dropdown-item" type="button">Baju</button>
              <button class="dropdown-item" type="button">Something else here</button>
            </div>
          </div>
          <a class="nav-link active" href="?module=pulau.php#get">Penyewaan<span class="sr-only"></span></a>
          <a class="nav-link" href="#">Hubungi Kami</a>
          <button type="button" class="btn btn-warning">Login</button>
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
          <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
        </div>
      </div>
    </nav>
  </section>  
  <!-- akhir navbar -->

  <!-- utama -->
  <section class="utama" id="utama">
    <div class="container utama">
    <nav class="navbar">
      <form class="d-flex search">
        <input class="form-control" type="search" placeholder="Tulis disini.." aria-label="Search">
        <button class="btn btn-outline-body bg-success" type="submit">Cari</button>
      </form>
      <span style="font-size:2vw; cursor:pointer" onclick="openMenu()">&#9776; open</span>
    </nav>
    
    <div class="pulau text-center mt-2" style="position: relative;">
      <img src="img/3.png" alt="pulauIndonesia">

      <?php
      $provinsiAja = query("SELECT * FROM provinsi");
      foreach($provinsiAja as $p):?>
        <a href="javascript:void()" onclick="openMenu('<?= $p['id_provinsi']; ?>')"><h6 class="tombolProvinsi" id=<?= $p['namaButton'];?>><?= $p['nama_provinsi'];?></h6></a>
      <?php endforeach;?>
  
    </div>

  </div>

  </section>
  <!-- akhir utama -->


  <!-- sidebar pilihan-->
  <section class="sidenav" id="sidebar">
    <div id="content">
      <!-- menaruh didalam sini -->
    </div>  
  </section>
  <!-- akhir sidebar pilihan-->




</body>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
      function openMenu(id_provinsi) {
        // alert('bisabisa');
        document.getElementById("sidebar").style.transform = "translatex(0%)";
        $.get("menu.php", {id_provinsi:id_provinsi}, function(data) {
            $("#content").html(data);
        });
      }

      function inputProvinsi() {
        // alert('bisabisa');
        document.getElementById("sidebar").style.transform = "translatex(0%)";
        $.get("admin/inputData.php", function(data) {
            $("#content").html(data);
        });
      }

      // function openDetail() {
      //   document.getElementById("pilihan").style.transform = "translatex(100%)";
      //   document.getElementById("detail").style.transform = "translatex(0%)";
      // }

      function closeDetail() {
        document.getElementById("sidebar").style.transform = "translatex(100%)";
      }
    </script>
</html>