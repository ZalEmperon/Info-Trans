<?php include 'koneksi.php';
  $id = $_GET['loktujuan'];
  $result = mysqli_query($koneksi, "SELECT * FROM data_angkot WHERE id_angkot = '$id'");
  $nilai = mysqli_fetch_assoc($result);
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
      .navbar-brand{
        font-size:1.5rem !important;
      }
      .jumbotron{
        background-image: url(asset/img/background.jpeg);
      	background-size: cover;
        height: 720px;
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
      .backgroundhasil{
        background: #008080;
        border-radius: 30px;
      }
      .idangkot{
        font-size: 120px;
        font-weight: bold;
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
    <title>Hasil</title>
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
      <div class="container text-center pt-4 text-light">
        <h3 class="m-3">Kendaraan yang digunakan : <?php echo $_GET['kendaraan']; ?></h3>
        <h3 class="m-3">Trayek yang harus Anda pilih : </h3><br>
        <div class="row">
          <div class="col-sm-5">
            <div class="container backgroundhasil mb-4 p-2">
              <p class="idangkot"><?php echo $nilai['id_angkot'] ?></p>
              <p>( <?php echo $nilai['jurusan'] ?> )</p>
            </div>
          </div>
          <div class="col-sm"></div>
          <div class="col-sm-5">
            <div class="container backgroundhasil mb-4 p-2">
              <p>Rute Kendaraan : <br><?php echo $nilai['rute'] ?></p>
              <hr style="border : 2px solid white;">
              <p>Kota : <br><?php echo $nilai['kota'] ?></p>
              <hr style="border : 2px solid white;">
              <p>Harga : <br>Rp <?php echo number_format($nilai['harga'], 0, ',', '.') ?></p>
            </div>
          </div>
        </div>
        <a href="index.php" class="btn btn-success">Kembali ke Beranda</a>
        <a href="feedback.php" class="btn btn-success">Feedback</a><br><br>
      </div>
    </div>
    <script src="asset/js/bootstrap.js"></script>
  </body>
</html>
