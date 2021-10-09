<body>
    
  <div class="container text-center">

    <div class="row">
      <div class="col-sm-12 mt-2">
        <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&times;</a>
        <h2>{{$provinsi->nama_provinsi}}</h2>
      </div>
    </div> 

    <div class="row">
      <div class="col-md-4">
        <img src="img/provinsi/<?= $provinsi["gambar"]; ?>" class="rounded-circle text-center" width="150px">
      </div>
      <div class="col-md-8 pt-2 pr-4">
        <p class="text">{{$provinsi->deskripsi}}</p>
      </div>
    </div>
    
    <div class="row ">
      <div class="col-sm-12 text-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="jenisPakaian">
            <a class="nav-link active" id="bajuAdat-tab" data-toggle="tab" href="#bajuAdat" role="tab" aria-controls="bajuAdat" aria-selected="true">Baju Adat</a>
          </li>

          <li class="nav-item" role="JenisPakaian">
              <?php 
                // $tariSatu = tampil1("SELECT * FROM baju INNER JOIN tari ON baju.id_baju = tari.id_baju WHERE id_provinsi = $id_provinsi AND jenis_baju = 'Baju Tari'");
                $tariSatu = \App\Models\baju::join('tari','baju.id_baju','=','tari.id_baju')->where('id_provinsi',"$provinsi->id_provinsi")->where('jenis_baju','Baju Tari')->orderBy('nama_tari', 'asc')->first();
                // dd($tariSatu->id_provinsi);
              ?>

            <a class="nav-link" id="bajuTari-tab" data-toggle="tab" href="#bajuTari" onload="test()" role="tab" aria-controls="bajuTari" aria-selected="false">Baju Tari</a>
          </li>

          <li class="nav-item" role="JenisPakaian">
            <a class="nav-link" id="bajuPernikahan-tab" data-toggle="tab" href="#bajuPernikahan" role="tab" aria-controls="bajuPernikahan" aria-selected="false">Baju Pernikahan</a>
          </li>
        </ul>
        <div class="tab-content jenisPakaian" id="isiJenisPakaian"> <!-- isi dari menu jenis-->
          

          <!-- isi dari baju adat biasa------------------------------------------->
          <div class="tab-pane jenisPakaian fade show active" id="bajuAdat" role="tabpanel" aria-labelledby="bajuAdat-tab">         
            <div class="row">

              <?php
              //untuk isi baju Adat Biasa
              // $baju = query("SELECT * FROM baju WHERE id_provinsi = $id_provinsi AND jenis_baju = 'Baju Adat'");
              $baju = \App\Models\baju::where('id_provinsi',"$id_provinsi")->where('jenis_baju','Baju Adat')->get();
              
              foreach($baju as $b):?>
              <div class="col-sm p-1">
                <div class="card">
                  <img class="card-img-top" src="" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-body"><?= $b["nama_baju"];?></h5>
                    <h5 class="card-title text-body"><?= $b['id_baju'];?></h5>
                    <p class="card-text text-body"><?= $b["harga_baju"];?></p>
                    <a href="javascript:void()" onclick="openDetail('<?= $b['id_baju']; ?>')" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>  
              </div>
              <?php endforeach;?>

            </div>
          </div>


          <!-- isi dari baju tari (macam macam tari)------------------------------------------->
          <div class="tab-pane jenisPakaian fade" id="bajuTari" role="tabpanel" aria-labelledby="bajuTari-tab"> 
            <div class="row">
              <div class="col-xs-1.5 judultab">
                <div class="nav flex-column nav-pills namaTari" id="v-pills-tab" role="tablist" aria-orientation="vertical">

    

                    <?php
                    $i = 0;
                    // $semuaTari = query("SELECT * FROM baju INNER JOIN tari ON baju.id_baju = tari.id_baju WHERE id_provinsi = $id_provinsi AND jenis_baju = 'Baju Tari'");

                    $semuaTari = \App\Models\baju::join('tari','baju.id_baju','=','tari.id_baju')->where('id_provinsi',"$id_provinsi")->where('jenis_baju',"Baju Tari")->orderBy('nama_baju','asc')->get();
                    ?>
                    
                    <?php foreach($semuaTari as $st):?>
                    <a class="nav-link" id="<?php echo 'tari' . $i;?>" data-toggle="pill" href="#bajuTarisub" onclick="bajuTari('<?php echo $st['nama_tari']; ?>' , '<?php echo $st['id_provinsi']; ?>')" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?= $st['nama_tari'];?></a>
                  

                      
                    <?php 
                    $i++; endforeach; ?>

                </div>
              </div>
              
              <div class="col-9">
                <div class="tab-content subTari" id="isisubBajuTari">
                  
                  <!-- baju tarinya -->
                  <div class="tab-pane fade" id="bajuTarisub" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="row">
                
                      <div class="col-sm p-1">
                        <div id="isinyagan"></div>
                        
                      </div>

                    </div>
                  </div>
                  
                </div>
              </div>

            </div>
          </div>


          <!-- isi dari baju pernikahan------------------------------------------->
          <div class="tab-pane jenisPakaian fade" id="bajuPernikahan" role="tabpanel" aria-labelledby="bajuPernikahan-tab">
            <div class="row">
                
            <?php 
            // $bajuPernikahan = query("SELECT * FROM baju WHERE id_provinsi = $id_provinsi AND jenis_baju = 'Baju Nikah'");
            $bajuPernikahan = \App\Models\baju::where('id_provinsi',"$id_provinsi")->where('jenis_baju','Baju Nikah')->orderBy('nama_baju','asc')->get();

            foreach($bajuPernikahan as $b):?>
              <div class="col-sm p-1">
                <div class="card">
                  <img class="card-img-top" src="" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-body"><?= $b["nama_baju"];?></h5>
                    <p class="card-text text-body"><?= $b["harga_baju"];?></p>
                    <a href="javascript:void()" onclick="openDetail('<?= $b['id_baju']; ?>')" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>  
              </div>
              <?php endforeach;?>
              
            </div>
          
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
<script>
  function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
      currentDate = Date.now();
    } while (currentDate - date < milliseconds);
  }

  function closeMenu() {
    
    document.getElementById("sidebar").style.transform = "translatex(100%)";
  }

  function openDetail(id_baju) {
    $.get("{{route('inputdetail')}}", {id_baju:id_baju}, function(data) {
        $("#content").html(data);
    });
  }

  function bajuTari(nama_tari,id_provinsi) {
    $.get("{{route('subtari')}}", {nama_tari:nama_tari,id_provinsi:id_provinsi}, function(data) {
        $("#isinyagan").html(data);
    });
  }

  function test(){
    alert("function jalan");
  }

</script>
</html>

