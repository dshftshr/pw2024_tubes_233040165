<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../halaman_login/login.php");
  exit;
}
require '../fungsi/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dasboard</title>
  <link rel="stylesheet" href="../css/dasboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
</head>

<body>
  <section class="about section" id="about">
    <div class="container flex-center">
      <h1 class="section-title-01">Selamat Datang </h1>
      <h2 class="section-title-02">Admin!

      </h2>
      <img src="../adminpanel/img/logo.png" alt="" style="width: 300px; height: 300px;">
      <div>
        <h1><a href="../adminpanel/admin.php">Silahkan Masuk</a></h1>



      </div>
    </div>
  </section>
</body>

</html>