
    
<?php foreach($fokusTari as $ft):?>
    
<div class="col-sm p-1">
    <div class="card">  
        <img class="card-img-top ml-auto mr-auto" src="img/gambarbaju/<?= $ft['gambar'];?>" style="width: 50%;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-body"><?= $ft['nama_baju'];?></h5>
            <p class="card-text text-body"><?= $ft['harga_baju'];?></p>
            <a href="javascript:void()" onclick="openDetail('<?= $ft['id']; ?>')" class="btn btn-primary">Go somewhere</a>
        </div> 
    </div>
</div>

<div class="col-sm p-1">
    <div class="card">  
        <img class="card-img-top ml-auto mr-auto" src="img/gambarbaju/<?= $ft['gambar'];?>" style="width: 50%;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-body"><?= $ft['nama_baju'];?></h5>
            <p class="card-text text-body"><?= $ft['harga_baju'];?></p>
            <a href="javascript:void()" onclick="openDetail('<?= $ft['id']; ?>')" class="btn btn-primary">Go somewhere</a>
        </div> 
    </div>
</div><div class="col-sm p-1">
    <div class="card">  
        <img class="card-img-top ml-auto mr-auto" src="img/gambarbaju/<?= $ft['gambar'];?>" style="width: 50%;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-body"><?= $ft['nama_baju'];?></h5>
            <p class="card-text text-body"><?= $ft['harga_baju'];?></p>
            <a href="javascript:void()" onclick="openDetail('<?= $ft['id']; ?>')" class="btn btn-primary">Go somewhere</a>
        </div> 
    </div>
</div>




<?php endforeach; ?>
