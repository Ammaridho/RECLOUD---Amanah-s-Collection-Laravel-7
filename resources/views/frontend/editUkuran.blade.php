<div class="row">
    <div class="col">
        <h5>Ukuran Masing Masing set Baju</h5>
    </div>
</div>
<?php 
$batasan = $fu;
$id = $id;

for($fiu = 0; $fiu < $batasan; $fiu++){?>
    
    <div class="row">
        <div class="col">
            <div class="input-group inputukuran" id="ukuran">

                <span class="input-group-text text-secondary" style="width: 10%; height:40px;">{{$fiu+1}}.</span>
                
                <select class="form-ukuran custom-select option_atasan" name="id_ukuran_atasan[]" id="ukuran_atasan{{$fiu}}" style="width: 30%; bottom: 5px;">
                    <option value="" selected>Ukuran Baju..</option>
                    <?php foreach($arrayChartAtasan as $a): ?>
                    <option value="<?= $a['id'];?>">{{$a['ukuran_atasan']}}</option>
                    <?php endforeach;?>
                </select>
                
                <select class="form-ukuran custom-select" name="id_ukuran_bawahan[]" id="ukuran_bawahan{{$fiu}}" style="width: 30%; bottom: 5px;">
                    <option value="" selected>Ukuran Celana/Rok..</option>
                    <?php foreach($arrayChartBawahan as $b):?>
                    <option  value="<?= $b['id'];?>"><?= $b['ukuran_bawahan'];?></option>
                    <?php endforeach;?>
                </select>
                
                <button type="button" class="btn btn-secondary bajutanggal" style="width: 10%; height:40px;" href="javascript:void()" onclick="formUkuran(-1,'<?= $id; ?>')">x</button>
            </div>
        </div>
    </div>

    
            
<?php }?>

    


<script>
    
    var batasan = {{$batasan}};

    var rows = batasan;

    let keranjang_ukuran = {{$keranjang_ukuran}};

    alert(keranjang_ukuran);


    $('.option_atasan').  //SAMPAI DISINI UNTUK SETPOTION SESUAI ISI KERANJANG SEBELUM DIEDIT


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
                // arr[i][2] = $(`#banyak${i}`).val();
            }
            
            return arr;
            
        }

        var ukuranBaju =  buatArray(rows);

        // console.log(ukuranBaju);

        document.getElementById('ukuranBaju').value = ukuranBaju;

        
    });

    

    

</script>