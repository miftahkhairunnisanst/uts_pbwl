<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    body {
      background-color: #ccc;
      overflow-x: hidden;
    }

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

    .container {
      margin-top: 40px;
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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

 
  <div class="container">
    <h2 class="fw-bold mb-4">Form Tambah Produk</h2>

    <form action="#" method="POST">
      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Kode Produk</label>
          <input type="text" name="kode" class="form-control" placeholder="Input Kode Produk">
        </div>
        <div class="col-md-4">
          <label class="form-label">Nama Produk</label>
          <input type="text" name="nama" class="form-control" placeholder="Input Nama Produk">
        </div>
        <div class="col-md-4">
          <label class="form-label">Jenis Produk</label>
          <select name="jenis" class="form-select">
            <option value="">Pilih Produk</option>
            <option value="Alat tulis">Alat tulis</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Pakaian">Pakaian</option>
          </select>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <label class="form-label">Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Input Harga">
        </div>
      </div>

      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>

 
  <div id="sidebar">
    <button class="close-btn" id="closeSidebar">&times;</button>
    <h5 class="fw-bold mb-3">UTS Laravel</h5>
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
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
  </script>
</body>
</html>
