<?php
  session_start();
  if(!isset($_SESSION["login"])) {
    header("Location: ../login/login.php");
    exit;
  }
require 'functions.php';

// Ambil Data di URL
$id = $_GET["id"];

// Query ID
$pdk = query("SELECT * FROM penduduk WHERE id = $id")[0];

// Submit Check
if (isset($_POST["submit"])) {


  // Insert Check
  if (ubah ($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'admin.php';
      </script>
      ";
  } else {
    echo "
      <script>
        alert('Data gagal diubah!');
        document.location.href = 'admin.php';
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
  <link rel="icon" href="../img/Lambang_Kabupaten_Subang-removebg-preview.png">
  <title>Ubah Data Penduduk</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 25px;
    }

    h1 {
      text-align: left;
      margin-left: 50px;
    }

    form {
      max-width: 500px;
      margin-left: 50px;
      display: inline-block;
      padding-bottom: 50px;
    }

    label {
      display: block;
      margin-bottom: 25px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      width: auto;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>

  <!-- CSS -->
  <link rel="stylesheet" href="../admin/tambah.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg shadow sticky-top">
    <div class="container-fluid">
      <img src="../img/Lambang_Kabupaten_Subang-removebg-preview.png" alt="Subang" title="Logo Pemerintahan Subang" width="80px" height="80px">
      <a class="navbar-brand" href="#">Kabupaten<br>Subang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../landingPage/user.php">Keluar</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1>Ubah Data Penduduk</h1>
  <form action="" method="post">
  <input type="hidden" name="id" value="<?= $pdk["id"]; ?>">


        <label for="nik">Nomor Induk Kependudukan :</label>
        <input type="text" name="nik" id="nik" autocomplete="off" required value="<?= $pdk["nik"]; ?>">

        <label for="namadepan">Nama Depan :</label>
        <input type="text" name="namadepan" id="namadepan" autocomplete="off" required value="<?= $pdk["namadepan"]; ?>">

        <label for="namabelakang">Nama Belakang :</label>
        <input type="text" name="namabelakang" id="namabelakang" autocomplete="off" required value="<?= $pdk["namabelakang"]; ?>">
        <br><br>
        <label for="tglahir">Tanggal Lahir :</label>
        <input type="date" name="tglahir" id="tglahir" autocomplete="off" required value="<?= $pdk["tglahir"]; ?>">
        <br><br>
        <label for="jeniskelamin">Jenis Kelamin :</label>
        <select id="jeniskelamin" name="jeniskelamin" autocomplete="off" required value="<?= $pdk["jeniskelamin"]; ?>">
          <option value="Laki-Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" autocomplete="off" required value="<?= $pdk["alamat"]; ?>">

        <label for="agama">Agama :</label>
        <select id="agama" name="agama" autocomplete="off" required value="<?= $pdk["agama"]; ?>">
          <option value="Islam">Islam</option>
          <option value="Kristen-Protestan">Kristen Protestan</option>
          <option value="Kristen-Khatolik">Kristen Khatolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Khonghucu">Khonghucu</option>
        </select>

        <label for="pekerjaan">Pekerjaan :</label>
        <input type="text" name="pekerjaan" id="pekerjaan" autocomplete="off" required value="<?= $pdk["pekerjaan"]; ?>">
        <br> <br> <br>
        <button type="submit" name="submit">Ubah Data</button>


  </form>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>