<?php
    $koneksi = mysqli_connect("localhost","root","","kendaraan") OR DIE("koneksi gagal");
    $hasil = mysqli_query($koneksi, "SELECT * FROM data_angkot");
?>
