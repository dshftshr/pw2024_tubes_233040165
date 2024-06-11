<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';

$movie = query("SELECT * FROM movie");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $movie = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>admin</title>
  <!-- Bostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- logis.css -->
  <link rel="stylesheet" href="../css/admin.css" />

  <!-- boostrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <header class="" style="margin-bottom: auto">
    <div class="kiri border-end border-4">
      <div class="tema mt-2">
        <h4 class="">Selamat Datang<br>Admin!</h4>
      </div>

      <div class="kiri_menu mt-5">
        <div class="mn d-flex">
          <div class="icn me-3">
            <i class="bi bi-film"></i>
          </div>
          <a href="#" class="text-decoration-none">
            <p class="fw-bold">Movie</p>
          </a>
        </div>

        <div class="mn d-flex">
          <div class="icn me-3">
            <i class="bi bi-person"></i>
          </div>
          <a href="user.php" class="text-decoration-none">
            <p class="fw-bold">Users</p>
          </a>
        </div>

        <div class="mn d-flex">
          <div class="icn me-3">
            <i class="bi bi-box-arrow-left"></i>
          </div>
          <a href="../halaman_login/logout.php" class="text-decoration-none">
            <p class="fw-bold">Logout</p>
          </a>
        </div>
      </div>
    </div>

    <!-- search -->
    <div class="tengah mx-auto" style="margin-right: 100%;">
      <div class="cari py-3 text-light">
        <form class="" action="" method="POST">
          <input class="keyword form-control me-2 rounded-pill text-light bg-secondary" type="text" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" class="keyword" autofocus class="keyword" />
          <div class="icon">
            <button class="btn btn-link" type="submit" name="cari" class="tombol-cari">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>

      <div class="add">
        <a href="tambah.php">
          <button type="button" class="btn btn-primary" data-toggel="modal">
            tambah film </button>
        </a>
      </div>

      <div class="data mt-4">
        <table class="table table-light table-hover">
          <thead class="">
            <tr>
              <th scope="col">#</th>
              <th scope="col">judul movie</th>
              <th scope="col">tayang</th>
              <th scope="col">description</th>
              <th scope="col">director</th>
              <th scope="col">gambar_film</th>
              <th scope="col">trailer</th>
              <th scope="col">aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($movie as $mv) : ?>
              <tr>
                <th><?= $i++; ?></th>
                <td><?= $mv['judul_movie']; ?></td>
                <td><?= $mv['tayang']; ?></td>
                <td><?= $mv['description']; ?></td>
                <td><?= $mv['director']; ?></td>
                <td><img src="../adminpanel/img/<?= $mv['gambar_film']; ?>" alt="" style="width : 100px"></td>
                <td><?= $mv['trailer']; ?></td>
                <td>
                  <div class="container">
                    <a href="update.php?id=<?= $mv['id_movie']; ?>">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="hapus.php?id=<?= $mv['id_movie']; ?>" onclick="return confirm('apakah anda yakin?');">
                      <i class="bi bi-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>

            <?php endforeach; ?>
          </tbody>
        </table>


      </div>
    </div>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>