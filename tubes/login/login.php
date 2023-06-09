<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg shadow sticky-top">
    <div class="container-fluid">
      <img src="../img/Lambang_Kabupaten_Subang-removebg-preview.png" alt="Subang" title="Logo Pemerintahan Subang" width="80px" height="80px">
      <a class="navbar-brand" href="../landingPage/user.php"><b>Kabupaten<br>Subang</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../landingPage/user.php">Beranda</a>
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
            <a class="nav-link" href="../login/login.php">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <h2>Login</h2>
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">
      </div>
      <button type="submit">Login</button>
    </form>
  </div>

  <footer>
    <div class="footer">
      <img src="../img/subang_jawara.png" alt="" width="250px" height="150px">
      <p>&copy; 2023 <span> KABUPATEN SUBANG. </span> All rights reserved.</p>
      <a href="../login/login.php"><br>Login</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>