<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-T+q8YLq2+3Mfsf2+GML+h5zgXU+KXk90N0VnEa0Ua6ChapW1/j2vh4yoRuEM2XKVK/H/1zbv9PKBaqhhARJr8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="login-container">
    <img src="img/logo.png" alt="Logo" class="logo">
    <h3>SISTEM INFORMASI REPOSITORY <br> LAPORAN PKL SISWA <br> SMK AL-MUHAJIRIN</h3>
    <form class="login-form" method="post" action="process_login.php">
      <input type="text" id="username" name="username" placeholder="Username">
      <input type="password" id="password" name="password" placeholder="Password">
      <button type="submit" class="login-btn">Login</button>
    </form>
    <p class="register-link">Belum memiliki akun? <a href="registrasi.php">Daftar akun</a></p>
  </div>
</body>
</html>
