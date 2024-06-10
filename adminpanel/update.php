<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';

// ambil id dari url
$id_movie = $_GET['id'];

// query movie berdasarkan id
$mv = query("SELECT * FROM movie WHERE id_movie = $id_movie");


// cek apakah tombol tambah sudah di pencet atau belum
if (isset($_POST['update'])) {
  if (update($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diupdate');
    document.location.href = 'admin.php'
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diupdate!');
    document.location.href = 'admin.php'
    </script>
    ";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Data Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container col-8" style="margin-top: 20px;">
    <h1>Update movie</h1>

    <form action="" method="POST">

      <div class=" mb-3">
        <input type="hidden" class="form-control" id="id_movie" name="id_movie" autofocus required value="<?= $mv['id_movie']; ?>">
      </div>

      <div class=" mb-3">
        <label for="judul_movie" class="form-label">judul movie</label>
        <input type="text" class="form-control" id="judul_movie" name="judul_movie" autofocus required value="<?= $mv['judul_movie']; ?>">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="text" class="form-control" id="description" name="description" autofocus required value="<?= $mv['description']; ?>">
      </div>

      <div class="mb-3">
        <label for="director" class="form-label">director</label>
        <input type="text" class="form-control" id="director" name="director" autofocus required value="<?= $mv['director']; ?>">
      </div>

      <div class="mb-3">
        <label for="tayang" class="form-label">tayang</label>
        <input type="date" class="form-control" id="tayang" name="tayang" autofocus required value="<?= $mv['tayang']; ?>">
      </div>

      <div class="mb-3">
        <label for="gambar_film" class="form-label">gambar film</label>
        <input type="file" class="form-control" id="gambar_film" name="gambar_film" autofocus required value="<?= $mv['gambar_film']; ?>">
      </div>

      <div class="mb-3">
        <label for="trailer" class="form-label">Trailer</label>
        <input type="text" class="form-control" id="trailer" name="trailer" autofocus required value="<?= $mv['trailer']; ?>">
      </div>

      <button type="submit" name="update" class="btn btn-primary">Update Data!</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">