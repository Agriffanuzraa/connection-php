<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "koneksi.php";
    ?>
    <form action="add_data.php" method="POST">
        <label>Nama Menu:</label>
        <input type="text" name="nama_menu" required><br>

        <label>Harga Menu:</label>
        <input type="number" name="harga_menu" required><br>

        <label>Deskripsi Menu:</label>
        <input type="text" name="desc_menu" required><br>

        <input type="submit" name="submit" value="Tambah Menu">
    </form>
</body>
</html>