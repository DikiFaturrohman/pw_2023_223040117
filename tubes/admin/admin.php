<?php
  session_start();
  if(!isset($_SESSION["login"])) {
    header("Location: ../login/login.php");
    exit;
  }


require 'functions.php';
// Query
$penduduk = query("SELECT * FROM penduduk");

if(isset($_POST["cari"])) {
  $penduduk = cari ($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
  <link rel="icon" href="../img/Lambang_Kabupaten_Subang-removebg-preview.png">
  <!-- CSS -->
  <link rel="stylesheet" href="admin.css">

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
            <a class="nav-link" href="../login/logout.php">Keluar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section>
      <h2>Selamat Datang</h2>
      <p>Anda dapat mengelola Data Penduduk di halaman ini.</p>
    </section>

    <div class="table">
      <h2>Daftar Penduduk</h2>

      <form action="" method="post">
        <input type="text" name="keyword" size="50" placeholder="Masukan Keyword" autofocus  autocomplete="off">
        <button type="submit" name="cari">Cari</button>
      </form>
      <br>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Aksi</th>
          <th>NIK</th>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Pekerjaan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($penduduk as $row) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
              <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin');">Hapus</a>
            </td>
            <td><?= $row["nik"]; ?></td>
            <td><?= $row["namadepan"]; ?></td>
            <td><?= $row["namabelakang"]; ?></td>
            <td><?= $row["tglahir"]; ?></td>
            <td><?= $row["jeniskelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["agama"]; ?></td>
            <td><?= $row["pekerjaan"]; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
  </main>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>