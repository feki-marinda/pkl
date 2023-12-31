<?php
session_start();

include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $hashed_password = md5($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$hashed_password'");

    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat Datang, ' . $data['status'] . '"); location.href="dashboard.php";</script>';
        } else {
            echo '<script>alert("Username/password salah.");
            location.href="index.php";
            </script>';
        }
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
