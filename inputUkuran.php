<?php 

$batasan = $_GET['isi'];

if(isset($_GET['isi'])){
    if($_GET['isi'] == 'h'){
        $batasan--;
    }else{
        $batasan =+ 1;
    }
}

for($fiu = 0; $fiu < $batasan; $fiu++){?>

    <div class="input-group mb-3" method="get" >

        <button type="button" class="btn btn-secondary" style="width: 10%" href="javascript:void()" onclick="inputUkuran('h')">x</button>

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
            
<?php }?>