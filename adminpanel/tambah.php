<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';


// cek apakah tombol tambah sudah di pencet atau belum
if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
alert('Data berhasil ditambahkan');
document.location.href = 'admin.php'
</script>";
  } else {
    echo "<script>
    alert('Data gagal ditambahkan!');
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
  <title>Tambah Data Movie</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container col-8" style="margin-top: 20px;">
    <h1>Tambah movie</h1>

    <form action="" method="POST" enctype="multipart/form-data" style="margin-top: 10px;">

      <div class="mb-3">
        <label for="nama" class="form-label">judul movie</label>
        <input type="text" class="form-control" id="nama" name="judul" required>
      </div>

      <div class="mb-3">
        <label for="tayang" class="form-label">tayang</label>
        <input type="date" class="form-control" id="tayang" name="tayang" required>
      </div>

      <div class="mb-3">
        <label for="desc" class="form-label">description</label>
        <input type="text" class="form-control" id="desc" name="desc" required>
      </div>

      <div class="mb-3">

        <label for="director" class="form-label">director</label>
        <input type="text" class="form-control" id="director" name="director" required>
      </div>

      <div class="mb-3">
        <label for="gambar" class="form-label">gambar film</label>
        <input type="file" class="form-control" id="gambar" name="gambar">
      </div>

      <div class="mb-3">
        <label for="trailer" class="form-label">Trailer</label>
        <input type="text" class="form-control" id="trailer" name="trailer">
      </div>

      <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">