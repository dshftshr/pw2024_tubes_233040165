<?php

function koneksi()
{
    return mysqli_connect('sql307.infinityfree.com', 'if0_36707217', 'YUTNnYqPtpQAuX', 'if0_36707217_pw2024_tubes_233040165');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        echo " <script>
                    alert('pilih gambar terlebih dahulu!');
                </script>";
        return false;
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo " <script>
                    alert('yang anda pilih bukan gambar!');
                </script>";
        return false;
    }

    // cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo " <script>
                    alert('yang anda pilih bukan gambar!');
                </script>";
        return false;
    }

    // cek uk file
    // maksimal 10Mb == 10000000
    if ($ukuran_file > 5000000) {
        echo " <script>
                    alert('ukuran terlalu besar!');
                </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, '../adminpanel/img/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data)
{

    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $description = htmlspecialchars($data['desc']);
    $director = htmlspecialchars($data['director']);
    $tayang = htmlspecialchars($data['tayang']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $trailer = htmlspecialchars($data['trailer']);

    $query = "INSERT INTO 
                 movie VALUES
                 (null, '$judul', '$tayang', '$description', '$director', '$gambar', '$trailer')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




function hapus($id_movie)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM movie WHERE id_movie = $id_movie");
    return mysqli_affected_rows($conn);
}

function update($data)
{
    $conn = koneksi();

    $id_movie = htmlspecialchars($data['id_movie']);
    $judul_movie = htmlspecialchars($data['judul_movie']);
    $tayang = htmlspecialchars($data['tayang']);
    $description = htmlspecialchars($data['description']);
    $director = htmlspecialchars($data['director']);
    $gambar_film = htmlspecialchars($data['gambar_film']);
    $trailer = htmlspecialchars($data['trailer']);


    $query = "UPDATE movie SET
                judul_movie = '$judul_movie',
                tayang = '$tayang',
                description = '$description',
                director = '$director',
                gambar_film = '$gambar_film',
                trailer = '$trailer'
                WHERE id_movie = $id_movie";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM movie 
                WHERE 
                judul_movie LIKE '%$keyword%' OR
                tayang LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                director LIKE '%$keyword%' OR
                gambar_film LIKE '%$keyword%' OR
                trailer LIKE '%$keyword%' 

                ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cariuser($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM users 
                WHERE 
                gambar LIKE '%$keyword%' OR
                username LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                password LIKE '%$keyword%' 

                ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function login($log)
{
    $conn = koneksi();

    $username = htmlspecialchars($log['username']);

    // Cari pengguna berdasarkan username
    $user = query("SELECT * FROM users WHERE username = '$username'");

    // Periksa jika pengguna ditemukan
    if ($user) {
        // Ambil hash password dari pengguna
        $hashed_password = $user['password'];

        // Periksa jika hash password ditemukan
        if ($hashed_password && password_verify($log['password'], $hashed_password)) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];

            if ($user['id_role'] == 1) {
                $_SESSION['role'] = 'admin';
            } else {
                $_SESSION['role'] = 'user';
            }

            // Set session dan redirect
            header("Location: ../user/index1.php");
            exit;
        }
    }

    // Jika tidak sesuai, kembalikan pesan kesalahan
    return [
        'error' => true,
        'pesan' => 'Username atau password salah!'
    ];
}



//     registrasi  
function registrasi($data)
{

    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $email = htmlspecialchars(strtolower($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);



    // jika username / password kosong
    if (empty($username)  || empty($email) || empty($password)) {

        echo
        "<script>
    alert.('username / password tidak boleh kosong!');
    document.location.href = 'registrasi.php';
    </script>";

        return false;
    }

    // jika username sudah ada 

    if (query("SELECT * FROM users WHERE username = '$username'")[0]) {
        echo " 
    <script>
    alert('Username sudah terdaftar');
    document.location.href = 'registrasi.php';
    </script>
    ";
        return false;
    }


    // jika password < 5 digit 
    if (strlen($password) < 5) {

        echo " 
    <script>
    alert('password terlalu pendek');
    document.location.href = 'registrasi.php';
    </script>
    ";
        return false;
    }

    // jika username dan password sudah sesuai
    // enkripsi password

    $password_baru = password_hash($password, PASSWORD_DEFAULT);

    $email = htmlspecialchars(strtolower($data['email']));


    // inserty ke tabel user
    $query = "INSERT INTO users
              VALUES 
              (0, 'default.png','$username', '$email', '$password_baru', '0')";


    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
