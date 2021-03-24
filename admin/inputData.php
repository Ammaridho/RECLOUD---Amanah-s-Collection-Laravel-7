<?php
    require '../functions.php';

    if(isset($_POST["submit"])){
        echo '<script>alert("Input Provinsi");</script>';
        //var_dump($_POST["submit"]);
        if(tambahProvinsi($_POST)>0){
            echo '<script>
                    alert("Data Berhasil ditambahkan");
                </script>';
        }else{
            echo '<script>
                    alert("Data Gagal ditambahkan");
                </script>';
        }
    }
?>

<html>
<body>
    <div class="container mt-4 text-white">
    <a href="javascript:void(0)" class="closebtn mt-4" onclick="closeMenu()">&times;</a>
        <form method="POST">
            <h1 class="text-center">Input Provinsi</h1>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Provinsi</label>
                <input type="text" class="form-control" id="nama_provinsi" name="nama_provinsi" placeholder="Nama Provinsi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Button</label>
                <input type="text" class="form-control" id="namaButton" name="namaButton" placeholder="Nama Button">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar" placeholder="gambar">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Input</button>
        </form>
    </div>

</body>
<script>
    function closeMenu() {   
    document.getElementById("sidebar").style.transform = "translatex(100%)";
    }
</script>
</html>