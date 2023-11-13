<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
    $Host = "localhost:3308";
    $Username = "root";
    $Password = ""; 
    $Nama  = "db_wad_modul3";

// 
    $connect = new mysqli("localhost:3308","root","","db_wad_modul3");
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
//
    if ($connect->connect_error){
        die("gaagal: ". $conn->connect_error);
    }
    echo"koneksi gagal"
?> 
?>
