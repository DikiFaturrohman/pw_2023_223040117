<?php 
    $mahasiswa = [
        [
        "nama" => "Diki Faturrohman",
        "nrp" => "223040117",
        "email" => "Diki.223040117@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Diki.jpeg"
        ],
        [
        "nama" => "Fadhil Rizky Fauzan",
        "nrp" => "223040105",
        "email" => "Fadhil.223040105@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Fadhil.jpeg"    
        ],
        [
        "nama" => "Rivaldy Novyan",
        "nrp" => "223040110",
        "email" => "Rivaldy.223040110@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Rivaldy.jpeg"    
        ],
        [
        "nama" => "Bayu Mahesa",
        "nrp" => "223040111",
        "email" => "Bayu.223040111@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Bayu.jpeg"    
        ],
        [
        "nama" => "Moh Zuhdi",
        "nrp" => "223040101",
        "email" => "Zuhdi.223040101@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Zuhdi.jpeg"    
        ],
        [
        "nama" => "Arley Prajaya",
        "nrp" => "223040106",
        "email" => "Arley.223040106@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Arley.jpeg"    
        ],
        [
        "nama" => "Eggy Bagus",
        "nrp" => "223040135",
        "email" => "Eggy.223040135@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Eggy.jpeg"    
        ],
        [
        "nama" => "Muhammad Daffa",
        "nrp" => "223040120",
        "email" => "Daffa.223040120@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Daffa.jpeg"
            ],
        [
        "nama" => "Rizal Fahla",
        "nrp" => "223040125",
        "email" => "Rizal.223040125@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Rizal.jpeg"    
        ],
        [
        "nama" => "Zabihullah Afgiansyah",
        "nrp" => "223040119",
        "email" => "Afgi.223040119@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "foto" => "Afgi.jpeg"    
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>    
    <?php endforeach; ?>
    </ul>
    </body>
</html>