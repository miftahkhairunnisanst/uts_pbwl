<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ccc;
      overflow-x: hidden;
    }

    /* Navbar abu-abu */
    .navbar-custom {
      background-color: #e9ecef;
      padding: 10px 20px;
    }

    .navbar-brand {
      font-weight: bold;
    }

  
    #sidebar {
      position: fixed;
      top: 0;
      right: -270px;
      width: 270px;
      height: 100%;
      background-color: #fff;
      box-shadow: -3px 0 8px rgba(0,0,0,0.1);
      transition: right 0.3s ease-in-out;
      padding: 20px;
      z-index: 1050;
    }

    #sidebar.active { right: 0; }

    #overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.3);
      display: none;
      z-index: 1040;
    }

    #overlay.active { display: block; }

    .menu-toggle {
      background: none;
      border: none;
      font-size: 28px;
      cursor: pointer;
    }

    .close-btn {
      position: absolute;
      top: 10px; right: 10px;
      font-size: 22px;
      border: none;
      background: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-custom">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <span class="navbar-brand">UTS Laravel</span>
      <button class="menu-toggle" id="openSidebar">&#9776;</button>
    </div>
  </nav>


  <div class="container mt-5">
    <div id="content">
    
      <h1 class="mt-3">Halaman Home</h1>
    </div>
  </div>

  <div id="sidebar">
    <button class="close-btn" id="closeSidebar">&times;</button>
    <h5 class="fw-bold mb-3">UTS Laravel</h5>
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link" href="#" id="menuHome">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#" id="menuProduk">Produk</a></li>
    </ul>
     <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>

  <div id="overlay"></div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const content = document.getElementById('content');

    openBtn.addEventListener('click', () => {
      sidebar.classList.add('active');
      overlay.classList.add('active');
    });

    const closeSidebar = () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
    };

    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);

    document.getElementById('menuHome').addEventListener('click', (e) => {
      e.preventDefault();
      content.innerHTML = `<h1 class="mt-3">Halaman Home</h1>`;
      closeSidebar();
    });

    document.getElementById('menuProduk').addEventListener('click', (e) => {
      e.preventDefault();
      fetch('/produk')
        .then(res => res.text())
        .then(html => content.innerHTML = html)
        .catch(() => content.innerHTML = '<p class="text-danger">Gagal memuat halaman produk 😢</p>');
      closeSidebar();
    });
  </script>
</body>
</html>
