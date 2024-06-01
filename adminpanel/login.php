<?php
require "../koneksi.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../Halaman Login./login.css" media="screen" title="no title">
</head>
<body>
    <div class="input">
        <h1>LOGIN</h1>
        <div class="box-input">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" placeholder="Username">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password"> 
        </div>
        <button type="submit" name="btnlogin" class="btn-input">Login</button>
        <div class="bottom">
            <p>Belum punya akun?
                <a href="./adminpanel/register.php">Register disini</a>
            </p>

        </div>
        
    </div>

    <div>

    </div>
    
</body>
</html>