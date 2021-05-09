<?php
  include_once("../koneksi.php");
  $id_angkot = $_POST['id_angkot'];
  $jurusan = $_POST['jurusan'];
  $rute = $_POST['rute'];
  $kota = $_POST['kota'];
  $harga = $_POST['harga'];

  $query = "INSERT INTO data_angkot (id_angkot, jurusan, rute, kota, harga) VALUES ('$id_angkot', '$jurusan', '$rute', '$kota', '$harga');";
  mysqli_query($koneksi,$query);
  header("Location: beranda.php");
?>
