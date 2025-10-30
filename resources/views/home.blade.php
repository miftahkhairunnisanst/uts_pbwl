<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
      background-color: #ccc; 
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

    #sidebar.active {
      right: 0;
    }

    #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.3);
      display: none;
      z-index: 1040;
    }

    #overlay.active {
      display: block;
    }
    .menu-toggle {
      position: fixed;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      font-size: 28px;
      z-index: 1100;
      cursor: pointer;
    }

    /* Tombol close (X) */
    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 22px;
      border: none;
      background: none;
      cursor: pointer;
    }

    .menu-toggle.hide {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h5 class="text-muted">UTS Laravel</h5>
    <h1>Halaman Home</h1>
  </div>
  <button class="menu-toggle" id="openSidebar">
    &#9776; 
  </button>

  <div id="overlay"></div>

  <div id="sidebar">
    <button class="close-btn" id="closeSidebar">&times;</button>
    <h5 class="fw-bold mb-3">UTS Laravel</h5>
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Produk</a></li>
    </ul>
    <form class="d-flex mt-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');

   
    openBtn.addEventListener('click', () => {
      sidebar.classList.add('active');
      overlay.classList.add('active');
      openBtn.classList.add('hide'); 
    });

   
    closeBtn.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      openBtn.classList.remove('hide'); 
    });

  
    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
      openBtn.classList.remove('hide'); 
    });
  </script>
</body>
</html>
