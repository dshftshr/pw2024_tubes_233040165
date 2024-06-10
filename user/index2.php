<?php

session_start();

require '../fungsi/function.php';

$movie = query("SELECT * FROM movie");

if (isset($_POST['cari'])) {
  $movie = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Movie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
  <!-- Owl Carousel css-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->
  <!-- Owl Carousel css-->


  <!-- jquery css-->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
  <!-- jquery css -->

</head>

<body>
  <section class="home">
    <div class="headerbg ">
      <header>
        <div class="container">
          <div class="navbar flex1">
            <div class="logo">
              <h2>MarvelTV</h2>
            </div>
            <nav>
              <ul id="menuitem">
                <li><a href="index1.php">Home</a></li>
                <li><a href="#">Trending</a></li>
                <li><a href="#">Comingsoon</a></li>
                <li><a href="index2.php">Movie</a></li>
                <?php if ($_SESSION['role'] === 'admin') : ?>
                  <a href="../adminpanel/dasboard.php" class="">
                    <li>Admin</li>
                  </a>
                <?php endif; ?>
              </ul>
            </nav>
            <span class="fa fa-bars" onclick="menutoggle()"></span>

            <div class="subscribe flex">
              <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search movie">
                <i class='bx bx-search'></i>
              </div>
              <a href="../halaman_login/login.php"><i id="palybtn" class="fas fa-user" style="text-align: center"></i></a>
            </div>
          </div>
        </div>
      </header>
    </div>
  </section>

  <section class="portofolio section" id="portofolio">
    <div class="container flex-center">
      <h1 class="section-title-01">Marvel</h1>
      <h2 class="section-title-02">Marvel</h2>
      <div class="content">

        <div class="portofolio-list">
          <?php foreach ($movie as $m) : ?>
            <div class="img-card-container">
              <div class="img-card">
                <div class="overlay"></div>
                <div class="info">
                  <h3><?= $m['judul_movie']; ?></h3>
                  <div class="time flex">
                    <span><?= $m['tayang']; ?></span>
                    <i class="fas fa-circle"></i>
                    <a href="detail.php?id=<?= $m['id_movie']; ?>">Detail</a>
                  </div>
                </div>
                <img src="../adminpanel/img/<?= $m['gambar_film']; ?>" alt="" />
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>



  </section>
  <!-- footer -->
  <footer>
    <div class="container mtop">
      <div class="box">
        <div class="logo">
          <h1>MarvelTV</h1>
          <div class="icon">
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-youtube-square"></i>
          </div>
        </div>
      </div>

      <div class="box" style="text-align: center;">
        <!-- <h2>Explore</h2> -->
        <div>
          <ul>
            <li><a href=""></a>Home</li>
            <li>Trending</li>
            <li>ComingSoon</li>
          </ul>

        </div>
      </div>


    </div>
    <p class="legal">Copyright (c) 2024 | By MarvelTV</p>
  </footer>





  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="js/main.js"></script>
</body>

</html>