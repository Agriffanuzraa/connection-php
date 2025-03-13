<?php
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            padding: 1rem;
            height: 8rem;
            width: 8rem;
            background-color: pink;
            margin-bottom:2rem;
        }
    </style>
</head>
<body>
    <?php while ($menu = mysqli_fetch_assoc($result) ) : ?>
        <div class="container">
            <p><?= $menu["nama_menu"]?></p>
            <p><?= $menu["desc_menu"]?></p>
        </div>
    <?php endwhile;?>
</body>
</html>