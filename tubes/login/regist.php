<?php 
require '../admin/functions.php';
  if(isset($_POST["register"])) {

    if (registrasi ($_POST)>0) {
      echo "<script>
              alert('User baru berhasi ditambahkan');
            </script>";
            header("Location: ../login/login.php");
            exit;
    } else {
      echo mysqli_error($conn);
    }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Registrasi</title>
  <link rel="icon" href="../img/Lambang_Kabupaten_Subang-removebg-preview.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg shadow sticky-top">
    <div class="container-fluid">
      <img src="../img/Lambang_Kabupaten_Subang-removebg-preview.png" alt="Subang" title="Logo Pemerintahan Subang" width="80px" height="80px">
      <a class="navbar-brand" href="#"><b>Kabupaten<br>Subang</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pendaftaran Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hubungi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/login.php">Login</a>
          </li>
        </ul> 
      </div>
    </div>
  </nav>

  <div class="container">
    <h2>Registrasi</h2>
    <form action="" method="post">
    
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="off" placeholder="Masukkan username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="off" placeholder="Masukkan password" required>
      </div>
      <div class="form-group">
        <label for="password2">Konfirmasi Password:</label>
        <input type="password" id="password2" name="password2" autocomplete="off" placeholder="Konfirmasi password" required>
      </div>
      <!-- <div class="form-group">
        <label for="user"></label>
        <input type="hidden" id="user" name="user" placeholder="user" required>
      </div> -->

      <button type="submit" name="register">Daftar</button>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>