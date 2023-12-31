<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .navbar {
      height: 60px; 
      width: 100%;
      position: fixed;
      top: 0;
      z-index: 999; 
    }

      .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 56px; 
      bottom: 0;
      left: 0;
      padding-top: 20px;
      background-color: #37474F; /* Warna latar belakang sidebar */
      overflow-x: hidden;
      border-right: 1px solid #dee2e6;
      color: #FFFFFF; /* Warna teks */
      float: left;
    }

    .sidebar-divider {
      position: fixed;
      top: 56px;
      left: 250px;
      height: 100%;
      border-right: 1px solid #FFFFFF; /* Garis pemisah vertikal */
    }

    .sidebar-heading {
      padding: 10px 15px;
      font-size: 1.2em;
      font-weight: bold;
    }
    .nav-link.active {
    background-color : #87CEFA;
  }

    .nav-link {
      color: #FFFFFF;
    }

    .nav-link:hover {
      color: #FFD600;
    }
    .navbar-brand {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .navbar-brand img {
      height: 50px;
      width: 50px;
      margin-right: 10px;
    }

    .navbar-brand h2 {
      margin-bottom: 0;
      color: white;
    }

    .navbar-toggler {
      color: white;
      border-color: white;
    }

    .navbar-toggler-icon {
      background-color: white;
    }

    .navbar-nav {
      gap: 1rem;
    }

    .navbar-nav .btn {
      margin-left: auto; 
    }
    .content {
      margin-top: 50px;
      margin-left: 260px; 
      padding: 20px; 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-info bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="">
        <h2 class="mb-0">Repository Laporan PKL</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form class="d-flex justify-content-end">
              <button class="btn btn-danger" type="submit">
                Keluar
                <i class="bi bi-box-arrow-right ms-2"></i>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="sidebar">
    <div class="position-sticky">
        <div class="sidebar-heading">Halaman Admin</div><hr>
        <ul class="nav flex-column">
            <?php
            $menuItems = [
                "Data User",
                "Data Siswa",
                "Data Guru Pamong",
                "Data PKL",
                "Data Laporan PKL",
                "Data Berita",
                "Data Dokumen",
                "Data Logbook",
                "Data Mitra",
                "Data Nilai PKL",
                "Data Sertifikat"
            ];

            foreach ($menuItems as $menuItem) {
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="dashboard.php?page=' . urlencode($menuItem) . '">' . $menuItem . '</a>';
              echo '</li>';
          }
            ?>
        </ul>
    </div>
</div>
  

<div class="content" id="main-content">
    <?php
    $menuItems = [
        "Data User" => "datauser.php",
        "Data Siswa" => "datasiswa.php",
        "Data Guru Pamong" => "datagurupamong.php",
        "Data PKL" => "dataPKL.php",
        "Data Laporan PKL" => "datalaporan.php",
        "Data Berita" => "databerita.php",
        "Data Dokumen" => "datadokumen.php",
        "Data Logbook" => "datalogbook.php",
        "Data Mitra" => "datamitra.php",
        "Data Nilai PKL" => "datanilai.php",
        "Data Sertifikat" => "datasertifikat.php"
    ];

    $content = 'datauser.php';

    if (isset($_GET['page']) && array_key_exists($_GET['page'], $menuItems)) {
        $content = $menuItems[$_GET['page']];
    }

    include $content;
    ?>
  </div>
<script>
  let currentPage = "<?php echo isset($_GET['page']) ? $_GET['page'] : 'Data User'; ?>";

// Temukan link sidebar sesuai dengan halaman saat ini dan tambahkan kelas 'active'
let sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
sidebarLinks.forEach(link => {
    if (link.innerText.trim() === currentPage) {
        link.classList.add('active');
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/icons.min.js"></script>
</body>
</html>
