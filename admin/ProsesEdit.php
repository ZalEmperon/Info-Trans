<?php
    include_once("../koneksi.php");
    $id = $_GET['id'];
    $id_angkot = $_POST['id_angkot'];
    $jurusan = $_POST['jurusan'];
    $rute = $_POST['rute'];
    $kota = $_POST['kota'];
    $harga = $_POST['harga'];


    $query = "UPDATE data_angkot SET id_angkot = '$id_angkot', jurusan = '$jurusan', rute = '$rute', kota = '$kota', harga = '$harga' WHERE no = $id";
    mysqli_query($koneksi,$query);
    header("Location: beranda.php");

?>
