<?php
session_start();

if (!isset($_SESSION['login'])) {
  // header("Location: ../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';

$users = query("SELECT * FROM users");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $users = cariuser($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>user</title>
  <!-- Bostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- logis.css -->
  <link rel="stylesheet" href="../css/admin.css" />

  <!-- boostrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
  <header class="" style="">
    <div class="kiri border-end border-4">
      <div class="logo mt-2">
        <h4 class="">Selamat Datang<br>Admin!</h4>
      </div>

      <div class="kiri_menu mt-5">
        <div class="mn d-flex">
          <div class="icn me-3">
            <i class="bi bi-film"></i>
          </div>
          <a href="admin.php" class="text-decoration-none">
            <p class="fw-bold">Movie</p>
          </a>
        </div>

        <div class="mn d-flex">
          <div class="icn me-3">
            <i class="bi bi-person"></i>
          </div>
          <a href="#" class="text-decoration-none">
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
    <div class="tengah mx-auto">
      <div class="cari py-3 text-light">
        <form class="" action="" method="POST">
          <input class="form-control me-2 rounded-pill text-light bg-secondary" type="text" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" autofocus />
          <div class="icon">
            <button class="btn btn-link" type="submit" name="cari">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- <div class="add">
        <a href="tambahuser.php">
          <button type="button" class="btn btn-primary">
            tambah users </button>
        </a>
      </div> -->

      <div class="data mt-4">
        <table class="table table-light table-hover">
          <thead class="">
            <tr>
              <th scope="col">#</th>
              <th scope="col">gambar</th>
              <th scope="col">username</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <!-- <th scope="col">aksi</th> -->
            </tr>
          </thead>
          <tbody>

            <?php $i = 1;
            foreach ($users as $u) : ?>
              <tr>
                <th><?= $i++; ?></th>
                <td><img src="../adminpanel/img/admin.jpg" style="width: 90px; height: 100px;" alt=""></td>
                <td><?= $u['username']; ?></td>
                <td><?= $u['email']; ?></td>
                <td><?= $u['password']; ?></td>
                <!-- <td> -->
                <!-- <div class="container"> -->
                <!--  <a href="update.php?id=  "> -->
                <!-- <i class="bi bi-pencil-square"></i> -->
                <!-- </a>  -->
                <!-- <a href="hapus.php?id=" onclick="return confirm('apakah anda yakin?');">
                      <i class="bi bi-trash"></i>
                    </a>
                  </div> -->
                <!-- </td> -->
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>