<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Website Movie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- Owl Carousel css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- Owl Carousel css-->


  <!-- jquery css-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <!-- jquery css-->

</head>

<body>
  <section class="home">
    <div class="headerbg ">
      <header>
        <div class="container ">
          <div class="navbar flex1">

            <nav>
              <ul id="menuitem">
                <li><a href="#home">Home</a></li>
                <li><a href="product.html">Movies</a></li>
                <li><a href="index.html">ComingSoon</a></li>
                <li><a href="contact.html">Trending</a></li>
              </ul>
            </nav>
            <span class="fa fa-bars" onclick="menutoggle()"></span>
            

            <div class="user flex">
              <i id="palybtn" class="fas fa-user"></i>
            </div>
          </div>
        </div>
      </header>

      <div class="home_content mtop">
        <div class="container">
          <div class="left">
            <h1>Marveltv</h1>

            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>1hrs 50mins</span>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p>Marvel's foundation lies in comic book publishing. Established in 1939, they've created iconic characters like Spider-Man, Iron Man, Captain America, Thor, Hulk, and the X-Men. These comics have captivated readers for generations.
            </p>
            <div class="button flex">
              <button class="btn">PLAY NOW</button>
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
      if (menu.style.maxHeight == '0px') {
        menu.style.maxHeight = "200px"
      } else {
        menu.style.maxHeight = "0px"
      }
    }

    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 50);
    })
  </script>


<!-- home -->
  <section id="home" class="popular mtop">
    <div class="container ">
      <div class="heading flex1">
        <h2>Most Popular</h2>
        <button>MORE VIDEO</button>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending1.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>My Generation</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p2.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Machine War</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p3.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Fight for Life</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p4.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>The Warrior Life</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p5.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Skull Of Myths </h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p6.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>The Jin's Friend</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p7.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Common Man's Idea</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="popular mtop">
    <div class="container ">
      <div class="heading flex1">
        <h2>Most Viewed</h2>
        <button>MORE VIDEO</button>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p7.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>My Generation</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p6.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Machine War</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p5.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Fight for Life</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p4.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>The Warrior Life</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="image/p3.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Skull Of Myths </h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
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

<!-- ComingSoon -->
  <section class="new_realase top">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="img/comingsoon1.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span> COMINGSOON</h2>
              <h1>VENOM</h1>
            </div>
            <div class="time flex">
              <label>M</label>
              <i class="fas fa-circle"></i>
              <span>1hrs 50mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p?>Eddie Brock (Tom Hardy) is a broken man after he loses everything including his job and fiancée. Just when his life is at its lowest, he becomes host to an alien symbiote which results in extraordinary superpowers—transforming him into Venom. Will these powers be enough for this new lethal protector to defeat great evil forces, especially against the far stronger and more weaponized symbiote rival, Riot?</p>

            <div class="button flex">
              <button class="btn">PLAY NOW</button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="img/comingsoon2.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span>comingsoon</h2>
              <h1>SPIDERMAN</h1>
            </div>
            <div class="time flex">
              <label>R</label>
              <i class="fas fa-circle"></i>
              <span>1hrs 50mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
              <i class="fas fa-circle"></i>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p>Average teenager Peter Parker is transformed into an extraordinary superhero after he is accidentally bitten by a radioactive spider. When his beloved uncle is savagely murdered during a robbery, young Peter vows to use his powers to avenge his death. Deeming himself "Spider-Man," he sets about ridding the streets of crime, bringing him into conflict with malevolent super-villain "Green Goblin."</p>

            <div class="button flex">
              <button class="btn">PLAY NOW</button>
              <i id="palybtn" class="fas fa-play"></i>
              <p>WATCH TRAILER</p>
            </div>
          </div>
        </div>
        <div class="items">
          <div class="left">
            <div class="img">
              <img src="img/comingsoon3.jpg" alt="">
            </div>
            <div class="heading">
              <h2> <span></span>COMINGSOON</h2>
              <h1>X-MAN</h1>
            </div>
            <div class="time flex">
              <label>R</label>
              <i class="fas fa-circle"></i>
              <span>1hrs 50mins</span>
              <i class="fas fa-circle"></i>
              <a class="flex1"><img src="https://img.icons8.com/color/95/000000/imdb.png" /> 8.5</a>
              <i class="fas fa-circle"></i>
              <p>2021</p>
              <i class="fas fa-circle"></i>
              <button>Action</button>
            </div>

            <p>The ultimate X-Men ensemble fights a war for the survival of the species across two time periods in X-MEN: DAYS OF FUTURE PAST. The beloved characters from the original “X-Men” film trilogy join forces with their younger selves from the past, “X-Men: First Class,” in order to change a major historical event and fight in an epic battle that could save our future.</p>

            <div class="button flex">
              <button class="btn">PLAY NOW</button>
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


<!-- Trending -->
  <section class="popular mtop">
    <div class="container ">
      <div class="heading flex1">
        <h2>TRENDING</h2>
        <button>MORE VIDEO</button>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending1.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>The Marvel</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending2.jpeg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Guardians Galaxy vol3</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending3.jpeg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Quantumania</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending4.jpeg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Wakanda Forever</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box">
            <div class="imgBox">
              <img src="img/trending5.jpg" alt="">
              <div class="icon">
                <i class="far fa-heart"></i>
                <i class="fas fa-share-alt"></i>
                <i class="fas fa-plus"></i>
              </div>
            </div>

            <div class="content">
              <i id="palybtn" class="fas fa-play"></i>
            </div>
            <div class="text">
              <h3>Thor : Love and Thunder</h3>
              <div class="time flex">
                <span>1hrs 50mins</span>
                <i class="fas fa-circle"></i>
                <a>Action</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- paxi mate ko lai aata hai-->
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      responsive: {
        414: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <footer>
    <div class="container mtop">
      <div class="box">
        <div class="logo">
          <img src="image/logo.png">
        </div>
        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="icon">
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter-square"></i>
          <i class="fab fa-youtube-square"></i>
        </div>
      </div>

      <div class="box">
        <h2>Explore</h2>
        <div class="flex">
          <ul>
            <li>Home</li> 
            <li>Tv Shows</li>
            <li>Actors</li>
            <li>Celebrity</li>
          </ul>
          <ul class="ul">
            <li>Movie</li>
            <li>Video</li>
            <li>Basketball</li>
            <li>Coress</li>
          </ul>
        </div>
      </div>

      <div class="box ">
        <h2>Company</h2>
        <div class="flex">
          <ul>
            <li>Company</li>
            <li>Terms of Use</li>
            <li>Contact us</li>
            <li>Our Team</li>
          </ul>
          <ul class="ul">
            <li>Privacy Policy</li>
            <li>Helps Center</li>
            <li>Subscribe</li>
            <li>FAQ</li>
          </ul>
        </div>
      </div>

      <div class="box">
        <h2>Download App</h2>
        <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="img flex1">
          <img src="image/app1.png" alt="">
          <img src="image/app2.png" alt="">
        </div>
      </div>
    </div>
    <p class="legal">Marvel TV</p>
  </footer>
</body>

</html>