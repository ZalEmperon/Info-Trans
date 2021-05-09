<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="asset/img/favicon.ico">
    <style media="screen">
      html {
        scroll-behavior: smooth;
      }
      .navbar-brand{
        font-size:1.5rem !important;
      }
      *{
        font-family: oswald;
      }
      .bulet{
        border-radius: 20px;
      }
    </style>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Info</title>
  </head>
  <body style="background-color:#558b2f;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-weight:bold;">Info Trans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active fw-bold" href="info.php?rute=">Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-4 mb-4">
      <div class="bg-white bulet">
        <div class="container pt-4">
          <form action="info.php" method="get">
            <input class="form-control" list="kota" id="exampleDataList" placeholder="Masukan Wilayah..." type="text" name="rute">
            <datalist id="kota" required>
              <option>Pilih Tempat</option>
              <option value="Asia">Asia</option>
              <option value="Bahagia">Bahagia</option>
              <option value="Cangkol">Cangkol</option>
              <option value="Ciperna">Ciperna</option>
              <option value="Cipto">Cipto</option>
              <option value="Clancang">Clancang</option>
              <option value="Drajat">Drajat</option>
              <option value="Dukuh">Dukuh Semar</option>
              <option value="Evakuasi">Evakuasi</option>
              <option value="Grage">Grage</option>
              <option value="Hero">Hero</option>
              <option value="Jagasatru">Jagasatru</option>
              <option value="Kanggraksan">Kanggraksan</option>
              <option value="Karang">Karang Getas</option>
              <option value="Kartini">Kartini</option>
              <option value="Kedawung">Kedawung</option>
              <option value="Kesambi">Kesambi</option>
              <option value="Klayan">Klayan</option>
              <option value="Krucuk">Krucuk</option>
              <option value="Majasem">Majasem</option>
              <option value="Merdeka">Jl. Merdeka</option>
              <option value="Mundu">Mundu</option>
              <option value="Pasar">Pasar Pagi</option>
              <option value="Pass">By Pass</option>
              <option value="Pasuketan">Pasuketan</option>
              <option value="Pegambiran">Pegambiran</option>
              <option value="Pemuda">Jl. Pemuda</option>
              <option value="Penggung">Penggung</option>
              <option value="Perumnas">Perumnas</option>
              <option value="Pesisir">Pesisir</option>
              <option value="Pilang">Pilang</option>
              <option value="Plered">Plered</option>
              <option value="Rajawali">Perum Rajawali</option>
              <option value="Sari">Gunung Sari</option>
              <option value="Siliwangi">Jl. Siliwangi</option>
              <option value="Stasiun">Stasiun Kejaksaan</option>
              <option value="Sumber">Sumber</option>
              <option value="Tentara">Tentara Pelajar</option>
              <option value="Terminal">Terminal</option>
              <option value="Tuparev">Tuparev</option>
              <option value="Wahidin">Wahidin</option>
            </datalist>
            <button type="submit" class="mt-3 btn btn-success">Cari</button>
          </form>
        </div>
        <div class="row">
          <?php
            $tempat = $_GET['rute'];
            $hasil = mysqli_query($koneksi, "SELECT * FROM data_angkot WHERE rute LIKE '%{$tempat}%'");
            while ($value = mysqli_fetch_assoc($hasil)): ?>
          <div class="col-sm-4 p-4">
            <div class="container bg-primary bulet text-white pt-2 pb-2 mt-3 mb-3">
              <h1 class="fw-bold"><?php echo $value['id_angkot'];?></h1>
              <hr style="border : 2px solid black;">
              <p>Rute Kendaraan : <br><?php echo $value['rute'] ?></p>
              <hr style="border : 2px solid black;">
              <p>Kota : <br><?php echo $value['kota'] ?></p>
              <hr style="border : 2px solid black;">
              <p>Harga : <br>Rp <?php echo number_format($value['harga'], 0, ',', '.') ?></p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <script src="asset/js/bootstrap.js"></script>
  </body>
</html>
