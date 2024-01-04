<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .wrapper {
      display: flex;
    }

    .sidebar {
      width: 250px;
      height: 100vh; /* Full height */
      background-color: #343a40; /* Background color */
      color: white; /* Text color */
    }

    .sidebar ul {
      list-style: none;
      padding-left: 0;
    }

    .sidebar li {
      padding: 10px 20px;
      border-bottom: 1px solid #555;
    }

    .sidebar li:hover {
      background-color: #495057;
    }

    .content {
      flex: 1;
      padding: 20px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .wrapper {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <ul>
        <li>Menu 1</li>
        <li>Menu 2</li>
        <li>Menu 3</li>
        <li>Menu 4</li>
        <li>Menu 5</li>
      </ul>
    </div>
    <div class="content">
      <h1>Main Content</h1>
      <p>Ini adalah area utama konten.</p>
    </div>
  </div>
</body>

</html>
