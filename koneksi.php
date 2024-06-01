<?php
    $conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040165");

    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL: " . mysqli_connect_error();
        exit();
    }

    

?>