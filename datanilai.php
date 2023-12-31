<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="..." crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-family: 'PT Serif', serif;
            font-family: 'Ubuntu', sans-serif;
        }

        .button-container button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            /* Menggeser ke kanan */
            align-items: center;
            margin-bottom: 20px;
        }

        .buttons-right button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
            /* Memberikan jarak antara tombol */
        }
    </style>
</head>

<body>

    <div>
        <h2 style="text-align : center">Data User</h2>
    </div>

    <div class="button-container">
        <div class="spacer"></div>
        <div class="buttons-right">
            <button>
                <i class="fas fa-plus"></i> Tambah Data Nilai PKL
            </button>
            <button id="printButton">
                <i class="fas fa-print"></i> Cetak
            </button>
        </div>
    </div>


    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>