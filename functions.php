<?php
require 'koneksi.php';


// tampil dalam bentuk array (sekali banyak)
function query($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    //untuk print sekali banyak
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

// tampil dalam bentuk satuan
function tampil1($query){

    global $conn;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    return $row;
}