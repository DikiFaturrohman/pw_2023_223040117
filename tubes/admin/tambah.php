<?php
require 'functions.php';
// Submit Check
if (isset($_POST["submit"])) {


  // Insert Check
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'admin.php';
      </script>
      ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan!');
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
  <title>Tambah Data Penduduk</title>

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


  <h1>Tambah Data Penduduk</h1>
  <form action="" method="post">


        <label for="nik">Nomor Induk Kependudukan :</label>
        <input type="text" name="nik" id="nik" required>

        <label for="namadepan">Nama Depan :</label>
        <input type="text" name="namadepan" id="namadepan" required>

        <label for="namabelakang">Nama Belakang :</label>
        <input type="text" name="namabelakang" id="namabelakang" required>
        <br><br>
        <label for="tglahir">Tanggal Lahir :</label>
        <input type="date" name="tglahir" id="tglahir" required>
        <br><br>
        <label for="jeniskelamin">Jenis Kelamin :</label>
        <select id="jeniskelamin" name="jeniskelamin" required>
          <option value="Laki-Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" required>

        <label for="agama">Agama :</label>
        <select id="agama" name="agama" required>
          <option value="Islam">Islam</option>
          <option value="Kristen-Protestan">Kristen Protestan</option>
          <option value="Kristen-Khatolik">Kristen Khatolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Khonghucu">Khonghucu</option>
        </select>

        <label for="pekerjaan">Pekerjaan :</label>
        <input type="text" name="pekerjaan" id="pekerjaan" required>
        <br> <br> <br>
        <button type="submit" name="submit">Tambah Data</button>


  </form>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>