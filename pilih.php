<?php
include 'koneksi.php';
$id = $_GET['loktujuan'];
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
      .navbar-brand{
        font-size:1.5rem !important;
      }
      *{
        font-family: oswald;
      }
      .jumbotron{
        background-image: url(asset/img/background.jpeg);
      	background-size: cover;
        height: 640px;
      }
      .custom {
        width: 120px !important;
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
        <h2 class="text-white mt-4">Pilih Kendaraan :</h2><br>
        <form action="hasil.php" method="get">
          <div class="mx-auto">
            <input type="hidden" value="<?php echo $id; ?>" name="loktujuan">
            <input type="submit" class="btn btn-success btn-lg custom" value="Angkot" name="kendaraan"><br><br>
            <input type="submit" class="btn btn-success btn-lg custom" value="Bus" name="kendaraan" disabled><br><br>
            <div class="dropdown">
              <button class="btn btn-success btn-lg dropdown-toggle custom" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Online
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.gojek.app&hl=in&gl=US">Gojek</a></li>
                <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.grabtaxi.passenger&hl=in&gl=US">Grab</a></li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="asset/js/bootstrap.js"></script>
  </body>
</html>
