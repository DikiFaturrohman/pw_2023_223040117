<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Website Kabupaten Subang</title>

  <!-- CSS -->
  <link rel="stylesheet" href="user.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

  <!-- Navbar -->
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
            <a class="nav-link" href="#profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../landingPage/daftar.php">Pendaftaran Penduduk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hubungi">Hubungi</a>
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

  <!-- Slider -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/subang3.jpg" class="d-inline-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/subang2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/subang1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

    <!-- Main -->
  </div>

  <div class="container">
    <!-- Profil -->
    <div class="title" id="sapa">
      <h1>Selamat Datang di Website Pemerintahan<br><span>Kabu</span>paten Subang</h1>
    </div>
    <div class="title" id="profil">
      <h1>Profil</h1>
    </div>
    <div class="content">
      <div class="bupati">
        <img src="../img/Bupati_Subang_Ruhimat.jpg" alt="">
        <h5>H. Ruhimat, S.Pd., M.Si</h5>
        <p>Bupati Subang</p>
        <p>Periode 2018 - Sekarang</p>
      </div>
      <div class="wbupati">
        <img src="../img/Wabup_Subang_Agus_MR.jpg" alt="">
        <h5>Agus Masykur Rosyadi, S.Si., MM</h5>
        <p>Wakil Bupati Subang</p>
        <p>Periode 2018 - Sekarang</p>
      </div>
    </div>

    <!-- Hubungi -->
    <div class="title" id="profil">
      <h1 id="hubungi">Hubungi Kami</h1>
    </div>
    <div class="content_hubungi">
    <form class="d-inline-block">
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" placeholder="Masukkan nama">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Masukkan alamat email">

      <label for="message">Pesan:</label>
      <textarea id="message" name="message" placeholder="Tulis pesan Anda"></textarea>

      <input type="submit" value="Kirim">
    </form>
    </div>

  </div>



  <!-- Footer -->
  <footer>
    <div class="footer">
      <img src="../img/subang_jawara.png" alt="" width="250px" height="150px">
      <p>&copy; 2023 <span> KABUPATEN SUBANG. </span> All rights reserved.</p>
      <a href="../login/login.php"><br>Login</a>
    </div>
  </footer>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>