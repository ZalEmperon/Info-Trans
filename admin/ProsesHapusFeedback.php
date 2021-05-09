<?php
    include_once("../koneksi.php");
    $id = $_GET['id'];
    $query = "DELETE FROM feedback WHERE id = $id";
    mysqli_query($koneksi,$query);
    header("Location: beranda.php");
?>
