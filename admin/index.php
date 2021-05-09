<?php

include_once('../koneksi.php');
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminname = mysqli_real_escape_string($koneksi,$_POST['adminname']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);

    $sql = "SELECT id FROM adminlogin WHERE adminname = '$adminname' and password = '$password'";
    $result = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    if($count == 1) {
       $_SESSION['login_user'] = $adminname;
       header("location: beranda.php");}
    else {
        echo "<script>";
        echo "alert('Username Atau Password Salah')";
        echo "</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../asset/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/log.css">
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <title>Login | Admin</title>
</head>
<body style="background:#00695c;">
    <form action="" method="post">
        <div class="login-box bg-white p-3 rounded-3">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="adminname" required>
            </div>
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input class="button" type="submit" name="login" value="Masuk">
        </div>
    </form>
</body>
</html>
