<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEMO CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div class="col-lg-10 col-xxl-9 my-5 mx-auto">
   <h1>Daftar Data Diri Mahasiswa</h1>
    <div class="col align-self-end">
        <a class="btn btn-small btn-success" href="./tambah.php"><i class="bi bi-clipboard-plus"></i> Tambah</a>
    </div>
    <div id="main" class="d-grid">
      <?php
            //  Untuk Connection Ke database Menyesuaikan Lagi ya brow 
            require_once "./connection.php";
            

            $sql = "SELECT * FROM `data_diri`";
          ?>

          <table class="table table-striped">
            <thead>
              <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>TEMPAT LAHIR</td>
                <td>TANGGAL LAHIR</td>
                <td>ALAMAT</td>
                <td>AKSI</td>
              </tr>
            </thead>
            <tbody>
              <tr>

          <?php

            $no = 1;

            if ($result = mysqli_query($connection, $sql)) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <!-- Di sesuaikan sama DBnya Juga  -->
                    <td><?php echo $no; $no++ ?></td>
                    <td><?php echo $row['nim']?></td>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['jenis_kelamin']?></td>
                    <td><?php echo $row['tempat_lahir']?></td>
                    <td><?php echo $row['tanggal_lahir']?></td>
                    <td><?php echo $row['alamat']?></td>
                    <td><a class="btn btn-small btn-warning" href="./edit.php?id=<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i>UBAH!!!</a> | 
                        <a class="btn btn-small btn-danger" href="./hapus.php?id=<?php echo $row['id'] ?>"><i class="bi bi-trash"></i>HAPUS!!!</a>
                    </td>        
                </tr>
          <?php

              }
            }

          
          ?>
              </>
            </tbody>
          </table>

      </div>
  </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>