<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Movie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie'></i> Movies
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
       

        <!-- Menu -->
        <ul class="navbar">
            <a href="#home" class="nav-link nav-active">
                <i class='bx bx-home'></i>
                <span class="nav-link-title">Home</span>
            </a>
            <a href="#home" class="nav-link">
                <i class='bx bx-tv'></i>
                <span class="nav-link-title">Movies</span>
            </a>
            <a href="#home" class="nav-link">
                <i class='bx bxs-hot'></i>
                <span class="nav-link-title">Trending</span>
            </a>
            <a href="#home" class="nav-link">
                <i class='bx bx-heart'></i>
                <span class="nav-link-title">Favorite</span>
            </a>
            <a href="#home" class="nav-link">
                <i class='bx bx-time'></i>
                <span class="nav-link-title">ComingSoon</span>
            </a>
        </ul>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="search-input" placeholder="Search Movie">
            <i class="bx bx-search"></i>
        </div>

        <a href="#" class="btn">Sign In</a>
    </header>

    <!-- home -->
    <section class="home swiper" id="home">
        <div class="swiper-slide conatiner">
            <img src="img/venom.jpg" alt="">
            <div class="home-text">
                <span>Marvel Universe</span>
                <h1>Venom: Let There <br>Be Carnage</h1>
                <a href="#" class="btn">Book Now</a>
                <a href="#" class="play">
                    <i class='bx bx-play'></i>
                </a>
            </div>
        </div>
        <div class="swiper-slide conatiner">
            <img src="" alt="">
            <div class="home-text">
                <span>Marvel Universe</span>
                <h1>Avengers: <br> Infinity War</h1>
                <a href="#" class="btn">Book Now</a>
                <a href="#" class="play">
                    <i class='bx bx-play'></i>
                </a>
            </div>
        </div>
        <div class="swiper-slide conatiner">
            <img src="img/spiderman.jpg" alt="">
            <div class="home-text">
                <span>Marvel Universe</span>
                <h1>Spider-Man <br> Far from Home</h1>
                <a href="#" class="btn">Book Now</a>
                <a href="#" class="play">
                    <i class='bx bx-play'></i>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>


     
</body>
</html>