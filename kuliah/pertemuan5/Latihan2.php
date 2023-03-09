<?php 
     $binatangHaramDimakan = ['🙈','🐺','🐱','🦁','🐷'];
     $limaMakananFavorit = ['🍆','🍿','🍗','🥩','🫓'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < 5; $i++) { ?>
        <li> <?= $binatangHaramDimakan[$i]; ?></li>
        <?php } ?>
    </ul>


    <h2>Daftar Makanan Favorit</h2>
    <ul>
        <?php for($i = 0; $i < 5; $i++) { ?>
        <li> <?= $limaMakananFavorit[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h2>Daftar Binatang</h2>
    <ol>
        <?php foreach($binatangHaramDimakan as $b) { ?>
        <li><?= $b; ?></li>
        <?php } ?>
    </ol>



    <h2>Daftar Makanan Favorit</h2>
    <ol>
        <?php foreach($limaMakananFavorit as $m) { ?>
        <li><?= $m; ?></li>
        <?php } ?>
    </ol>

</body>
</html>