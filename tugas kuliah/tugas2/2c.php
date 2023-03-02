<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2c</title>
</head>
<style>
    .warna {
        background-color: salmon;
        border: 2px solid black;
        color: black;
        width: 50px;
        height: 50px;
        text-align: center;
  }
</style>

<body>
    <table cellpadding="10" cellspacing="0">
        <?php for ($x = 10; $x >= 1; $x--) : ?>
            <tr>
                <?php for ($y = 1; $y <= $x; $y++) : ?>
                    <td class="warna"> <?= "$y"; ?></td>
                <?php endfor; ?>
            </tr>
         <?php endfor; ?>
    </table>
</body>
</html>