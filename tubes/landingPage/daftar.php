<?php
  session_start();
  if(!isset($_SESSION["login"])) {
    header("Location: ../login/login.php");
    exit;
  }

require '../admin/functions.php';

// Submit Check
if (isset($_POST["submit"])) {


  // Insert Check
  if (daftar ($_POST) > 0) {
    echo "
      <script>
        alert('Berhasil Mendaftar!');
        document.location.href = 'user.php';
      </script>
      ";
  } else {
    echo "
      <script>
        alert('Gagal Mendaftar!');
        document.location.href = 'user.php';
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
  <title>Form Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0px;
     
  background-image: url("../img/bg.jpg");

    }

    .navbar {
      background-color: darkgrey;
    }

    .navbar-brand {
      text-align: left;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
    }

    .navbar ul li {
      margin-right: 20px;
    }

    .nav-link:hover {
      color: #333;
    }

    h1 {
      text-align: left;
      margin-left: 50px;
      margin-top: 50px;
      margin-bottom: 30px;
    }

    form {
      max-width: 500px;
      margin-left: 50px;
    }

    label {
      display: block;
      margin-bottom: 10px;
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
      margin-bottom: 50px;
    }

    .footer {
      background-color: darkgrey;
      position: static;
      bottom: 0;
      left: 0;
      right: 0;
      height: 330px;
    }

    .footer img {
      float: right;
    }

    .footer p {
      margin-top: 50px;
      margin-left: 60px;
      text-align: left;
      display: inline-block;
      font-size: larger;
    }

    .footer a {
      margin-left: 150px;
      display: inline-block;
      font-size: large;
    }

    .footer span {
      color: green;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg shadow sticky-top">
    <div class="container-fluid">
      <img src="../img/Lambang_Kabupaten_Subang-removebg-preview.png" alt="Subang" title="Logo Pemerintahan Subang" width="80px" height="80px">
      <a class="navbar-brand" href="../landingPage/user.php">Kabupaten<br>Subang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="user.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../landingPage/user.php #profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../landingPage/daftar.php">Pendaftaran Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../landingPage/user.php #hubungi">Hubungi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/logout.php">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>

  <h1>Form Pendaftaran Kependudukan</h1>
  <form style="display: inline-block;" action="" method="post">
    <label for="nik">NIK:</label>
    <input type="text" id="nik" name="nik" autocomplete="off" required>

    <label for="namadepan">Nama Depan:</label>
    <input type="text" id="namadepan" name="namadepan" autocomplete="off" required>

    <label for="namabelakang">Nama Belakang:</label>
    <input type="text" id="namabelakang" name="namabelakang" autocomplete="off" required>

    <label for="tglahir">Tanggal Lahir:</label>
    <input type="date" id="tglahir" name="tglahir" autocomplete="off" required>

    <label for="jeniskelamin">Jenis Kelamin:</label>
    <select id="jeniskelamin" name="jeniskelamin" autocomplete="off" required>
      <option value="laki-laki">Laki-laki</option>
      <option value="perempuan">Perempuan</option>
    </select>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" autocomplete="off" required>

    <label for="agama">Agama:</label>
    <select id="agama" name="agama"  autocomplete="off"required>
      <option value="islam">Islam</option>
      <option value="kristen-protestan">Kristen Protestan</option>
      <option value="kristen-khatolik">Kristen Khatolik</option>
      <option value="hindu">Hindu</option>
      <option value="budha">Budha</option>
      <option value="khonghucu">Khonghucu</option>
    </select>

    <label for="pekerjaan">Pekerjaan:</label>
    <input type="text" id="pekerjaan" name="pekerjaan" autocomplete="off" required>
    <br><br>
    <input type="submit" value="Daftar" name="submit">
  </form>

  <footer>
    <div class="footer">
      <img src="../img/subang_jawara.png" alt="" width="250px" height="150px">
      <p>&copy; 2023 <span> KABUPATEN SUBANG. </span> All rights reserved.</p>
      <a href="../login/login.php"><br>Login</a>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>