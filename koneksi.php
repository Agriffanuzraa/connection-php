<?php
    $host ="localhost";
    $user="root";
    $pass = "";
    $db = "coffeshop";
    
    $koneksi = new mysqli($host,$user,$pass,$db);

    if(!$koneksi){
        die("koneksi gagal".$koneksi->connect_error);
    }else{
        // echo "berhasil";
        echo "<script>alert('berhasil tersambung pada server')</script>";
    }

    // ambil data dari tabel menu
    $result = mysqli_query($koneksi,"SELECT * FROM menu");

    // ambil data (fetch) mahasiswa  dari object
    // fetch itu cuman sekali ambil data
    $menu = mysqli_fetch_assoc($result);
    
    
?>