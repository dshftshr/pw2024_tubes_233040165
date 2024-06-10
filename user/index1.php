<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../halaman_login/login.php");
  exit;
}
require '../fungsi/function.php';


$movie = query("SELECT * FROM movie LIMIT 0, 5");

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
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Owl Carousel css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- Owl Carousel css-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- jquery css-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <!-- jquery css-->

</head>

<body>

  <!-- scroll -->
  <div class="scrollToTop-btn flex-center">
    <i class="fas fa-arrow-up"></i>
  </div>

  <!-- navbar -->

  <section class="home" id="home">
    <div class="headerbg">
      <header>
        <div class="container">
          <div class="navbar flex1">
            <div class="logo">
              <h2>MarvelTV</h2>
            </div>
            <nav>
              <ul id="menuitem">
                <li><a href="#home">Home</a></li>
                <li><a href="#trending">Trending</a></li>
                <li><a href="#comingsoon">Comingsoon</a></li>
                <li><a href="index2.php">Movie</a></li>
                <?php if ($_SESSION['role'] === 'admin') : ?>
                  <a href="../adminpanel/dasboard.php" class="">
                    <li>Admin</li>
                  </a>
                <?php endif; ?>
              </ul>
            </nav>
            <span class="fa fa-bars" onclick="menutoggle()"></span>


            <form action="" method="POST">
              <div class="subscribe flex" style="text-align: center">
                <div class="search-box">
                  <input type="search" name="" id="search-input" placeholder="Search movie" class="keyword">
                  <i class='bx bx-search'></i>
                </div>
                <a href="../halaman_login/login.php"><i id="palybtn" class="fas fa-user" style="text-align: center"></i></a>
              </div>
            </form>

          </div>
        </div>
      </header>

      <div class="home_content mtop">
        <div class="container">
          <div class="left">
            <h1>The Marvels</h1>

            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>10 November</span>
              <i class="fas fa-circle"></i>
              <p>2023</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p>Carol Danvers AKA Captain Marvel telah mendapatkan kembali identitasnya dari Kree yang kejam dan membalas dendam pada Intelijen Tertinggi. Namun konsekuensi yang tidak diinginkan membuat Carol menanggung beban alam semesta yang tidak stabil. Ketika tugasnya mengirimnya ke lubang cacing anomali yang terkait dengan seorang revolusioner Kree, kekuatannya terjerat dengan penggemar berat Jersey City Kamala Khan, alias Ms. Marvel, dan keponakan perempuan Carol yang terasing, sekarang S.A.B.E.R. astronot Kapten Monica Rambeau.</p>
            <div class="button flex">
              <button class="btn"><a href="https://youtu.be/uwmDH12MAA4?si=XqUVVzd7fhWbiTBw">PLAY NOW</a></button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    var menuitem = document.getElementById("menuitem");
    menuitem.style.maxHeight = "0px";

    function menutoggle() {
      if (menuitem.style.maxHeight == '0px') {
        menuitem.style.maxHeight = "200px"
      } else {
        menuitem.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 50);
    })
  </script>



  <section class="popular mtop" id="trending">
    <div class="container">
      <div class="heading flex1">
        <h2>TRENDING</h2>
        <!-- <button>MORE VIDEO</button> -->
      </div>
      <div class="owl-carousel owl-theme">
        <?php foreach ($movie as $m) : ?>
          <div class="item">
            <div class="box">
              <div class="imgBox">
                <img src="../adminpanel/img/<?= $m['gambar_film']; ?>" alt="">
              </div>
              <div class="content">
                <i id="palybtn" class="fas fa-play"></i>
              </div>
              <div class="text">
                <h3><?= $m['judul_movie']; ?></h3>
                <div class="time flex">
                  <span><?= $m['tayang']; ?></span>
                  <i class="fas fa-circle"></i>
                  <a href="detail.php?id=<?= $m['id_movie']; ?>">Detail</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <!-- Owl Carousel -->

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      responsive: {
        411: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>


  <section class="new_realase top" id="comingsoon">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="../adminpanel/img/comingsoon1.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span>COMINGSOON</h2>
              <h1>VENOM</h1>
            </div>
            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>5 October</span>
              <i class="fas fa-circle"></i>
              <p>2018</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>
            <P>Eddie Brock (Tom Hardy) is a broken man after he loses everything including his job and fiancée. Just when his life is at its lowest, he becomes host to an alien symbiote which results in extraordinary superpowers—transforming him into Venom. Will these powers be enough for this new lethal protector to defeat great evil forces, especially against the far stronger and more weaponized symbiote rival, Riot?
            </P>
            <div class="button flex">
              <button class="btn"><a href="https://youtu.be/u9Mv98Gr5pY?si=_QVlGBRtHtKSxc3i">PLAY NOW</a></button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>

        <div class="items">
          <div class="left">
            <div class="img">
              <img src="../adminpanel/img/comingsoon2.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span>COMINGSOON</h2>
              <h1>SPIDER-MAN</h1>
            </div>
            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>3 May</span>
              <i class="fas fa-circle"></i>
              <p>2002</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p>Average teenager Peter Parker is trans ed into an extraordinary superhero after he is accidentally bitten by a radioactive spider. When his beloved uncle is savagely murdered during a robbery, young Peter vows to use his powers to avenge his death. Deeming himself "Spider-Man," he sets about ridding the streets of crime, bringing him into conflict with malevolent super-villain "Green Goblin."</p>

            <div class="button flex">
              <button class="btn"><a href="https://youtu.be/t06RUxPbp_c?si=KoAhujZePEUmMVL7">PLAY NOW</a></button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>

        <div class="items">
          <div class="left">
            <div class="img">
              <img src="../adminpanel/img/comingsoon3.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span>COMINGSOON</h2>
              <h1>X-MEN</h1>
            </div>
            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>23 May</span>
              <i class="fas fa-circle"></i>
              <p>2014</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>
            <p>The ultimate X-Men ensemble fights a war for the survival of the species across two time periods in X-MEN: DAYS OF FUTURE PAST. The beloved characters from the original “X-Men” film trilogy join forces with their younger selves from the past, “X-Men: First Class,” in order to change a major historical event and fight in an epic battle that could save our future.</p>
            <div class="button flex">
              <button class="btn"><a href="https://youtu.be/pK2zYHWDZKo?si=Ei-AcLXERTZtuKDM">PLAY NOW</a></button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 20,
      dots: true,
      items: 1
    })
  </script>


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
            <li><a href="#home">Home</a></li>
            <li><a href="#trending">Trending</a></li>
            <li><a href="#comingsoon">ComingSoon</a></li>
          </ul>
        </div>
      </div>


    </div>
    <p class="legal">Copyright (c) 2024 | By MarvelTV</p>
  </footer>

  <script src="js/main.js"></script>
</body>

</html>