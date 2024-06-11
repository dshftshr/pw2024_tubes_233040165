<?php

require '../fungsi/function.php';

$users = cariuser($_GET['keyword']);
?>


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