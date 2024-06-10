<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';


$id_movie = $_GET['id'];


$movie = query("SELECT * FROM movie WHERE id_movie = $id_movie");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Review</title>
  <link rel="stylesheet" href="../css/detail.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
</head>

<body>
  <section class="about section" id="about">
    <div class="container flex-center">
      <h1 class="section-title-01">Marvel</h1>
      <h2 class="section-title-02">Marvel</h2>
      <div class="content flex-center">
        <div class="about-img">
          <img src="../adminpanel/img/<?= $movie['gambar_film']; ?>" alt="" style="height: 500px;" />
        </div>
        <div class="about-info">
          <h1><?= $movie['judul_movie']; ?></h1>
          <div class="description">
            <p><?= $movie['description']; ?></p>
            <h5><?= $movie['director']; ?></h5>
            <h5><?= $movie['tayang']; ?></h5>
          </div>
          <a href="<?= $movie['trailer']; ?>">Lihat Trailer</a>
        </div>
      </div>

    </div>
  </section>
</body>

</html>