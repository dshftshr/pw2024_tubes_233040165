<?php
session_start();

// if (!isset($_SESSION['login'])) {
//     header("Location: ../adminpanel/dasboard.php");
//     exit;
// }

require '../fungsi/function.php';


// ketika tombol login ditekan
if (isset($_POST['login'])) {
    $login = login($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/login.css" media="screen" title="no title">
</head>

<body>
    <div class="input">
        <h1>LOGIN</h1>
        <?php if (isset($login['error'])) : ?>
            <p style="color: red; font-style:italic"><?= $login['pesan']; ?></p>
        <?php endif ?>

        <form action="" method="post">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
            </div>

            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="login" class="btn-input">Login</button>
            <div class="bottom">
                <p>Belum punya akun?
                    <a href="register.php">Register disini</a>
                </p>
            </div>
        </form>

    </div>

</body>

</html>