<?php 
require 'functions.php';

// var_dump($_GET['nama_tari']);

// var_dump($_GET['id_provinsi']);

$id_provinsi = $_GET['id_provinsi'];

$pilih_tari = $_GET['nama_tari'];

$fokusTari = query("SELECT * FROM baju INNER JOIN tari ON
                    baju.id_baju = tari.id_baju WHERE 
                    id_provinsi = $id_provinsi AND jenis_baju = 'Baju Tari' AND nama_tari = '$pilih_tari'");

foreach($fokusTari as $ft):?>

<h4><?php echo $_GET['nama_tari'] ?></h4>
    <div class="card">  
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-body"><?= $ft['nama_baju'];?></h5>
            <p class="card-text text-body"><?= $ft['harga_baju'];?></p>
            <a href="javascript:void()" onclick="openDetail('<?= $ft['id_baju']; ?>')" class="btn btn-primary">Go somewhere</a>
        </div> 
    </div>

<?php endforeach; ?>
