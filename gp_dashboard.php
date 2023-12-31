<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-primary bg-primary">
        <div class="container-fluid">
            <img src="img/Logo.png" alt="Logo" style="width:50px;" class="rounded-pill">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <h3 class="text-light text-start ms-3">Repository Laporan PKL</h3>

                </ul>
                <form class="d-flex">
                    <button class="btn btn-danger" type="button">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu1">Data Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#menu2">Mengelola Data</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container-fluid tab-pane active"><br>
                <h3 class="text-center">SELAMAT DATANG DI <br>SISTEM INFORMASI REPOSITORY <br>LAPORAN PKL SISWA SMK
                    AL-MUHAJIRIN</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia voluptas illum maxime itaque
                    libero voluptatibus voluptate doloribus optio, nobis incidunt atque quisquam magnam necessitatibus
                    ipsum quo. Impedit laborum molestias tempora?</p>
                <?php include "card.html"; ?>
            </div>

        </div>
        <div id="menu1" class="container-fluid tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iste dolor atque magnam reiciendis commodi
                corporis nesciunt ab assumenda, dicta impedit debitis nihil voluptatibus ea numquam nam eligendi tenetur
                omnis.</p>

        </div>
        <div id="menu2" class="container-fluid tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam.</p>
        </div>
    </div>
    </div>


    </div>
    </div>
    </div>
</body>

</html>