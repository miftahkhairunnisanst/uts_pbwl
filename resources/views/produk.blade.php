<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ccc;
      overflow-x: hidden;
    }

    .container {
      margin-top: 30px;
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <!-- Konten utama aja -->
  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="fw-bold">Halaman Produk</h2>
      <a href="#" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
       @for ($i = 0; $i < count($produk); $i++)
    <tr>
      <td>{{ $produk[$i]['kode'] }}</td>
      <td>{{ $produk[$i]['nama'] }}</td>
      <td>{{ $produk[$i]['jenis'] }}</td>
      <td>{{ number_format($produk[$i]['harga'], 0, ',', '.') }}</td>
    </tr>
      @endfor

      </tbody>
    </table>
  </div>

</body>
</html>
