<?php 
require 'functions.php';

// Ambil Data di URL
$id = $_GET["id"];

// Query ID
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

  // Submit Check
  if ( isset($_POST["submit"]) ) {


    // Insert Check
    if(ubah ($_POST)>0) {
      echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'index.php';
      </script>
      ";
    } else {
      echo "
      <script>
        alert('Data gagal diubah!');
        document.location.href = 'index.php';
      </script>
      ";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

    <ul>
      <li>
        <label for="nim">Nomor Induk Mahasiswa :</label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data</button>
      </li>
    </ul>

  </form>
</body>
</html>