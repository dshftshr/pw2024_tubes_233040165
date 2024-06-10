<?php

require '../fungsi/function.php';

$movie = cari($_GET['keyword']);
?>

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