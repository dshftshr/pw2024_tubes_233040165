<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("../halaman_login/login.php");
  exit;
}

require '../fungsi/function.php';

// mengambil id dari url
$id_movie = $_GET['id'];

if (hapus($id_movie) > 0) {
  echo "<script>
  alert('Data berhasil dihapus');
  document.location.href = 'admin.php'
  </script>";
} else {
  echo "<script>
    alert('Data gagal dihapus');
    document.location.href = 'admin.php'
    </script>
    ";
}
