
    
<?php 
    foreach($fokusTari as $ft):?>

    
        <div class="card">  
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-body"><?= $ft['nama_baju'];?></h5>
                <p class="card-text text-body"><?= $ft['harga_baju'];?></p>
                <a href="javascript:void()" onclick="openDetail('<?= $ft['id']; ?>')" class="btn btn-primary">Go somewhere</a>
            </div> 
        </div>

    <?php endforeach; ?>
