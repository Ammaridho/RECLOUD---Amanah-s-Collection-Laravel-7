<?php 
$batasan = $_GET['fu'];
$id_baju = $_GET['id_baju'];


for($fiu = 0; $fiu < $batasan; $fiu++){?>

    

    <div class="input-group" id="ukuran">

        <?php

        // $arrayChartAtasan = query("SELECT * FROM baju INNER JOIN chart_atasan ON baju.id_atasan = chart_atasan.id_atasan WHERE id_baju = $id_baju");

        $arrayChartAtasan = \App\Models\baju::join('chart_atasan','baju.id_atasan','=','chart_atasan.id_atasan')
                                                  ->where('baju.id_baju',"$id_baju")
                                                  ->get();
        // $arrayChartBawahan = query("SELECT * FROM baju INNER JOIN chart_bawahan ON baju.id_bawahan = chart_bawahan.id_bawahan WHERE id_baju = $id_baju");

        $arrayChartBawahan = \App\Models\baju::join('chart_bawahan','baju.id_bawahan','=','chart_bawahan.id_bawahan')
                                                  ->where('baju.id_baju',"$id_baju")
                                                  ->get();
        ?>

        <button type="button" class="btn btn-secondary" style="width: 10%; height:40px;" href="javascript:void()" onclick="formUkuran(-1,'<?= $id_baju; ?>')">x</button>

        <select class="form-ukuran custom-select" name="ukuran_atasan{{$fiu}}" id="ukuran_atasan{{$fiu}}" style="width: 30%; bottom: 5px;">
            <option selected>Ukuran Baju..</option>
            <?php foreach($arrayChartAtasan as $a): ?>
            <option value="<?= $a['ukuran_atasan'];?>"><?= $a['ukuran_atasan'];?></option>
            <?php endforeach;?>
        </select>

        <select class="form-ukuran custom-select" name="ukuran_bawahan{{$fiu}}" id="ukuran_bawahan{{$fiu}}" style="width: 30%; bottom: 5px;">
            <option selected>Ukuran Celana/Rok..</option>
            <?php foreach($arrayChartBawahan as $b):?>
            <option  value="<?= $b['ukuran_bawahan'];?>"><?= $b['ukuran_bawahan'];?></option>
            <?php endforeach;?>
        </select>

        <input type="number" id="banyak{{$fiu}}" name="banyak{{$fiu}}" value="0" min="0" class="form-ukuran form-control" style="width: 15%; top: 1px;">

    </div>
            
<?php }?>

    


<script>
    
    var batasan = {{$batasan}};

    var rows = batasan;


    $('#inputukuran').find('.form-ukuran').on('keyup change', function(){

        function buatArray(rows) {

            //buat array 2d
            var arr = [];

            for (let i = 0; i < rows; i++) {
                arr[i] = [];
            }
        
            //masukkan value
            for (let i = 0; i < batasan; i++) {
                arr[i][0] = $(`#ukuran_atasan${i}`).val();
                arr[i][1] = $(`#ukuran_bawahan${i}`).val();
                arr[i][2] = $(`#banyak${i}`).val();
            }

            return arr;
            
        }

        var ukuranBaju =  buatArray(rows);

        document.getElementById('ukuranBaju').value = ukuranBaju;

        console.log(ukuranBaju);
    });

    

    

</script>