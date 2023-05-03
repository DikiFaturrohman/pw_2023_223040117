<!DOCTYPE html>
<html>

<head>
  <title>SUBANG JAWARA</title>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light shadow" style="background-color: #F6F1F1;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/subang_subang.png" alt="" width="100" height="60" class="d-inline-block align-text-center">
      SUBANG JAWARA
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Visi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lainnya
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">LOGIN</a></li>
            <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Navbar -->

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/subang1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/subang2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/subang3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
  <!-- End Carousel -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="../img/Bupati_Subang_Ruhimat.jpg" alt="" class="rounded-circle img-thumbnail" id="image">
    <h1 class="display-4"> H. Ruhimat, S,Pd., M.Si</h1>
    <p class="lead">Bupati Kabupaten Subang | 2018 - 2023</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#19A7CE" fill-opacity="1" d="M0,32L40,37.3C80,43,160,53,240,48C320,43,400,21,480,42.7C560,64,640,128,720,165.3C800,203,880,213,960,197.3C1040,181,1120,139,1200,122.7C1280,107,1360,117,1400,122.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </section>
  <!-- End Jumbotron -->
  
  <!-- Hero -->
  <section class="hero">
    <h1>VISI</h1>
    <p>“Kabupaten Subang yang Bersih, Maju, Sejahtera dan Berkarakter”</p>
  </section>
  <!-- End Hero -->

  <!-- Features -->
  <section class="features">
    <h2>Berita</h2>
    <ul>
      <li><i class="fas fa-check"></i></li>
      <li><i class="fas fa-check"></i></li>
      <li><i class="fas fa-check"></i></li>
    </ul>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#146C94" fill-opacity="1" d="M0,224L40,240C80,256,160,288,240,261.3C320,235,400,149,480,144C560,139,640,213,720,208C800,203,880,117,960,122.7C1040,128,1120,224,1200,272C1280,320,1360,320,1400,320L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>

  <section class="cta shadow" style="background-color: #146C94;">
    <h3>SUBANG JAWARA</h3>
    <p></p>
    <a href="#" class="btn"></a>
  </section>

  <footer class="shadow" style="background-color: #146C94;">
    <p>&copy; 2023 SUBANG JAWARA</p>
  </footer>

</body>

</html>