<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "amcol";


$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(mysqli_connect_error()){
    echo 'Gagal melakukan koneksi ke database :'. mysqli_connect_error();
}

?>