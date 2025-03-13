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
            padding: 3rem;
            height: 8rem;
            width: 8rem;
            background-color: pink;
        }
    </style>
</head>
<body>
    <?php foreach ($menu = mysqli_fetch_assoc($result) as $mn) : ?>
        <?php var_dump($mn); ?>
        <div class="container">
            <p><?= $menu["nama_menu"]?></p>
            <p><?= $menu["desc_menu"]?></p>
        </div>
    <?php endforeach;?>
</body>
</html>