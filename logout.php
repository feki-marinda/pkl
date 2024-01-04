<!-- logout.php -->
<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy(); // Hancurkan sesi
    header("Location: index.php"); // Redirect ke halaman login setelah logout
    exit;
} else {
    // Jika akses langsung ke file logout.php tanpa menggunakan metode POST,
    // maka alihkan ke halaman login
    header("Location: index.php");
    exit;
}
?>
