<?php 
session_start();

if(isset($_SESSION["login"])) {
  header("Location: ../admin/admin.php");
  exit;
}

require '../admin/functions.php';

  if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");

    // Check Username
    if(mysqli_num_rows($result) === 1) {
      // Password Check
      $row = mysqli_fetch_assoc($result);
      $role = $row["role"];
      if(password_verify($password, $row["password"])) {
        // Set Session
        $_SESSION["login"] = true;
        if($role=='admin'){

        header("Location: ../admin/admin.php");
        exit;
        } else {
          header("Location: ../landingPage/user.php");
          exit;
        }
      }
    }
    $error = true;
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
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
            <a class="nav-link" href="../landingPage/daftar.php">Pendaftaran Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hubungi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/regist.php">Registrasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <h2>Login</h2>
    <?php if(isset($error)) : ?>
      <p style="color: red;">Username / Password Salah!</p>
    <?php endif; ?>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="off" placeholder="Masukkan username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="off" placeholder="Masukkan password" required>
      </div>
      <button type="submit" name="login">Login</button>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>