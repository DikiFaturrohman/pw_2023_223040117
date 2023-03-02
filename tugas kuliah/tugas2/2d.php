<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2d</title>
</head>
<style>
    .table {
        border: 1px solid black;
    }

    .warna {
        background-color: black;
        width: 25px;
        height: 25px:
        border: 3px solid black;
    }

    .warna2 {
        background-color: white;
        width: 25px;
        height: 25px;
    }
</style>

<body>

    <table class="table" cellpadding="10" cellspacing="0">
        <?php for ($x = 1; $x <= 5; $x++) : ?>
            <tr>
                <?php for ($y = 1; $y <= 5; $y++) :?>
                <?php if (($x + $y) % 2 == 0 ) : ?>
                    <td class="warna">
                        <?php else : ?>
                    <td class="warna2">
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>
                    
</body>
</html>