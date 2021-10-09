@extends('layouts.main')

@section('content')

    <head>
        <link rel="stylesheet" href="css/styleButtonProvinsi.css">
        <link rel="stylesheet" href="css/style.css">
    </head>


    <!-- pulau -->
  <section class="utama" id="utama">
    <div class="container utama">
      <nav class="navbar pt-5 bg-transparent">
        <form class="d-flex search">
          <input class="form-control" type="search" placeholder="Tulis disini.." aria-label="Search">
          <button class="btn btn-outline-body bg-success" type="submit">Cari</button>
        </form>
        {{-- <span style="font-size:2vw; cursor:pointer" onclick="openMenu()">&#9776; open</span> --}}
      </nav>
      
      <div class="pulau text-center mt-2" style="position: relative;">
        <img src="img/3.png" alt="pulauIndonesia">

        <?php
        foreach($semuaprovinsi as $p):?>
          <a href="javascript:void()" onclick="openMenuside('<?= $p['id_provinsi']; ?>')"><h6 class="tombolProvinsi" id=<?= $p['namaButton'];?>><?= $p['nama_provinsi'];?></h6></a>
        <?php endforeach;?>
    
      </div>

    </div>

  </section>
  <!-- akhir pulau -->

  
  <!-- sidebar pilihan-->
  <section class="sidenav pt-4" id="sidebar">
    <div id="content">
      <!-- menaruh didalam sini -->
    </div>  
  </section>
  <!-- akhir sidebar pilihan-->


    
    <script src="js/bootstrap.bundle.min.js"></script>

    
    <script>
      function openMenuside(id_provinsi) {
        // alert('bisabisa');
        document.getElementById("sidebar").style.transform = "translatex(0%)";
        $.get("{{route('menu')}}", {id_provinsi:id_provinsi}, function(data) {
            $("#content").html(data);
            $("#tari0").trigger("click");
        });
      }

      function inputProvinsi() {
        // alert('bisabisa');
        document.getElementById("sidebar").style.transform = "translatex(0%)";
        $.get("admin/inputData.php", function(data) {
            $("#content").html(data);
        });
      }

      function closeDetail() {
        document.getElementById("sidebar").style.transform = "translatex(100%)";
      }
    </script>

@endsection