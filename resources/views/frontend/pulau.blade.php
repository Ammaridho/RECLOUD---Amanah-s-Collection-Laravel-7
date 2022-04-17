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
        {{-- <button onclick="openMenutest()" type="button">test side</button> --}}
        {{-- <span style="font-size:2vw; cursor:pointer" onclick="openMenu()">&#9776; open</span> --}}
      </nav>
      
      <div class="pulau text-center mt-2" style="position: relative;">
        <img src="img/3.png" alt="pulauIndonesia">

        <?php
        foreach($semuaprovinsi as $p):?>
          <a href="javascript:void()" onclick="openMenuside('<?= $p['id']; ?>')"><h6 class="tombolProvinsi" id=<?= $p['namaButton_provinsi'];?>><?= $p['nama_provinsi'];?></h6></a>
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


    
    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}

    
    <script>
      function openMenutest() {
        document.getElementById("sidebar").style.transform = "translatex(0%)";
    }

      function openMenuside(provinsi_id) {
        $.get("{{route('menu')}}", {provinsi_id:provinsi_id}, function(data) {
          $("#content").html(data);
          $("#tari0").trigger("click");
        });
        document.getElementById("sidebar").style.transform = "translatex(0%)";
      }

      function inputProvinsi() {
        document.getElementById("sidebar").style.transform = "translatex(0%)";
        $.get("admin/inputData.php", function(data) {
            $("#content").html(data);
        });
      }

      // function closeDetail() {
      //   document.getElementById("sidebar").style.transform = "translatex(100%)";
      //   $("#content").html('');
      // }
    </script>

@endsection