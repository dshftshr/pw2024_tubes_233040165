<?php
require '../fungsi/function.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo " 
      <script>
      alert('user baru berhasil ditambahkan. silahkan login');
      document.location.href = 'login.php';
      </script>
      ";
    } else {
        echo 'user gagal ditambahkan';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/login.css" media="screen" title="no title">
</head>

<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="" method="post">
            <div class="box-input">
                <i class="fas fa-address-book"></i>
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" placeholder="Email" name="email">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>
            <button type="submit" name="registrasi" class="btn-input">Register</button>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="login.php">Login disini</a>
                </p>

            </div>
        </form>

    </div>

</body>

</html>