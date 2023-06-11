<?php
require 'functions.php';
// Query
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>

  <!-- CSS -->
  

</head>

<body>
<link rel="stylesheet" href="../php&mysql/style.css">
  <header>
    <h1>Halaman Admin</h1>
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Pengguna</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li><a href="#">Keluar</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Selamat Datang, Admin</h2>
      <p>Anda dapat mengelola pengguna, produk, dan pengaturan di halaman ini.</p>
    </section>
    <div class="table">
      <h2>Daftar Mahasiswa</h2>

      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Aksi</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="">ubah</a>
              <a href="">hapus</a>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
  </main>

  <footer>
    <p>Hak Cipta &copy; 2023 Halaman Admin</p>
  </footer>
</body>

</html>