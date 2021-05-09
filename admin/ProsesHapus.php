<?php
    include_once("../koneksi.php");
    $id = $_GET['id'];
    $query = "DELETE FROM data_angkot WHERE no = $id";
    mysqli_query($koneksi,$query);
    header("Location: beranda.php");
?>
