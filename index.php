<?php
include 'koneksi.php';
?>
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
      *{
        font-family: oswald;
      }
      .jumbotron{
        background-image: url(asset/img/background.jpeg);
      	background-size: cover;
        height: 640px;
      }
      .size{
        height: 270px;
        width: 270px;
        padding: 20px;
        border-radius: 60px;
      }
      .form-select{
        margin: 0 auto;
        display: block;
      }
      .navbar-brand{
        font-size:1.5rem !important;
      }
      @media (min-width: 992px){
        .jumbotron{
          height: 625px;
        }
      }
    </style>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Beranda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-weight:bold;">Info Trans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="info.php?rute=">Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tentang.html">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center pt-4">
        <img src="asset/img/logo.jpg" alt="logo" class="mx-auto size">
        <form action="pilih.php" method="get">
          <select class="form-select form-select-lg" name="loktujuan" style="width:65%" required>
            <option value="">Pilih Jurusan </option>
            <?php while ($value = mysqli_fetch_assoc($hasil)):?>
            <option value="<?php echo $value['id_angkot'] ?>"><?php echo $value["jurusan"];?></option>
            <?php endwhile; ?>
          </select>
          <button type="submit" class="fw-bold btn btn-success mt-4" style="border-radius: 25px;width:100px;">Cari</button>
        </form>
      </div>
    </div>
    <script src="asset/js/bootstrap.js"></script>
  </body>
</html>
