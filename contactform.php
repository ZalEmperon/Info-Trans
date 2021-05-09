<?php
  include_once("koneksi.php");
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];
  $query = "INSERT INTO feedback(nama, email, feedback) VALUES('$nama', '$email', '$feedback')";
  mysqli_query($koneksi,$query);
  header("Location:feedback.php?msg");
?>
