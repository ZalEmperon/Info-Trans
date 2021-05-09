<?php
    include_once("../koneksi.php");
    include('session.php');
    $id=$_GET['id'];
    $query = "SELECT * FROM data_angkot WHERE no = $id";
    $result = mysqli_query($koneksi,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    *{
      font-family: oswald;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../asset/img/favicon.ico">
  <link rel="stylesheet" href="../asset/css/bootstrap.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Edit | Admin</title>
</head>
<body>
<div class="container mt-5">
  <h1>EDIT DATA TRAYEK</h1>
    <?php foreach($result as $row):?>
        <form action="ProsesEdit.php?id=<?php echo $id;?>" method="post">
            <label>Masukan Trayek Angkot : </label><br><input type="text" name="id_angkot" value="<?php echo $row['id_angkot'] ?>"><br>
            <label>Masukan Jurusan : </label><br><input type="text" name="jurusan" value="<?php echo $row['jurusan'] ?>"><br>
            <label>Masukan Rute : </label><br><input type="text" name="rute" value="<?php echo $row['rute'] ?>"><br>
            <label>Masukan Kota : </label><br><input type="text" name="kota" value="<?php echo $row['kota'] ?>"><br>
            <label>Masukan Harga : </label><br><input type="number" name="harga" value="<?php echo $row['harga'] ?>"><br><br>
            <input type="submit" class="btn btn-primary"value="Konfirmasi">
        </form>
      </div>
    <?php endforeach;?>
</body>
</html>
