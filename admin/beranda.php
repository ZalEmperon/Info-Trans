<?php
    include("../koneksi.php");
    include('session.php');
    $query = "SELECT * FROM data_angkot ORDER BY id_angkot ASC";
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
    <title>Home | Admin</title>
</head>
<body>
    <div class="container pt-4">
      <h1 class="fw-bold">DASBOARD DATA INFO TRANS</h1>
      <h2>Welcome <?php echo $login_session; ?></h2>
      <a href = "logout.php" class="btn btn-danger">Log Out</a>
      <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Data
      </button>
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title fw-bold" id="staticBackdropLabel">Tambah Data Angkot</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="ProsesInputTrayek.php" method="post">
                  <label>Masukan Trayek Angkot : </label><br><input type="text" name="id_angkot"><br>
                  <label>Masukan Jurusan : </label><br><input type="text" name="jurusan"><br>
                  <label>Masukan Rute : </label><br><textarea type="text" name="rute" rows="6"></textarea><br>
                  <label>Masukan Kota : </label><br><input type="text" name="kota"><br>
                  <label>Masukan Harga : </label><br><input type="number" name="harga"><br>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <br><br>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-dark">
            <tr>
                <th>No</th>
                <th>Trayek angkot</th>
                <th>Jurusan</th>
                <th>Rute</th>
                <th>Kota</th>
                <th>Harga</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
                $no = 1;
                foreach ($result as $row) :?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['id_angkot'];?></td>
                    <td><?php echo $row['jurusan'];?></td>
                    <td><?php echo $row['rute'];?></td>
                    <td><?php echo $row['kota'];?></td>
                    <td>Rp <?php echo number_format($row['harga'], 0, ',', '.');?></td>
                    <td><a href="FromEdit.php?id=<?php echo $row['no'];?>" class="btn btn-success">Edit</a>
                    <a href="ProsesHapus.php?id=<?php echo $row['no'];?>" class="btn btn-danger">hapus</a></td>
                </tr>
            <?php $no++;endforeach;?>
        </table>
      </div>
    </div><br><br><br><br><br><br>
    <div class="container">
      <div class="table-responsive">
      <table class="table table-bordered table-striped table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Feedback</th>
          <th>Action</th>
        </tr>
        <?php  $id = 1;
        $query1 = "SELECT * FROM feedback";
        $result1 = mysqli_query($koneksi,$query1);
        foreach ($result1 as $rows) :?>
        <tr>
          <td><?php echo $id;?></td>
          <td><?php echo $rows['nama'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['feedback'];?></td>
          <td><a href="ProsesHapusFeedback.php?id=<?php echo $rows['id'];?>" class="btn btn-danger">hapus</a></td>
        </tr>
      <?php $id++;endforeach; ?>
      </table>
    </div>
    </div>
    <script src="../asset/js/bootstrap.js"></script>
</body>
</html>
