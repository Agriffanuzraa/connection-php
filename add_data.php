<?php
include "koneksi.php"; // Koneksi ke database

if (isset($_POST["submit"])) {
    $nama = $_POST['nama_menu'];
    $harga = $_POST['harga_menu'];
    $desc = $_POST['desc_menu'];

    // Query buat masukin data ke database
    $query = "INSERT INTO menu (nama_menu, harga_menu, desc_menu) VALUES ('$nama', '$harga', '$desc')";
    
    if ($koneksi->query($query) === TRUE) {
        echo "menu berhasil ditambahkan!";
        header("Location: display.php");
    } else {
        echo "❌ Error: " ;
        $koneksi->error;
    }

    $koneksi->close(); // Tutup koneksi
}
?>
