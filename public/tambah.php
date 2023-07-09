<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div class="col-lg-4 col-xxl-4 my-5 mx-auto">
    <h1 class="text-center">TAMBAH DATA DIRI</h1>
    <?php

    if(isset($_POST['tambah'])) {

        require_once "./connection.php";

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];

            // Disesuaikan sama DBnya 
        $sql = "INSERT INTO `data_diri`
                (`nim`,`nama`,`jenis_kelamin`,`tempat_lahir`,`tanggal_lahir`,`alamat`)
                VALUES
                ('$nim','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat')";

        if (mysqli_query($connection, $sql)) {
    ?>
        <div class="alert alert-success" role="alert">
            <i class="bi bi-info-circle"></i> Data Berhasil Ditambah. <a class="btn btn-link" href="./">Halaman Utama</a>
        </div>
    <?php
        }

    }

    ?>
    <form class="row needs-validation" action="tambah.php" method="post" novalidate>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">NIM</label>
            <input type="text" class="form-control" id="validationCustom01" name="nim" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="validationCustom02" name="nama" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">JENIS KELAMIN</label>
            <select class="form-select" id="validationCustom03" name="jenis_kelamin" required>
                <option selected disabled value="">Choose...</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div class="invalid-feedback">
            Please select a valid gender.
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom04" class="form-label">TEMPAT LAHIR</label>
            <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">TANGGAL LAHIR</label>
            <input type="text" class="form-control" id="validationCustom05" name="tanggal_lahir" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom06" class="form-label">ALAMAT</label>
            <textarea class="form-control" id="validationCustom06" name="alamat" required>
            </textarea>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary btn-large" type="submit" name="tambah" value="Tambah">Tambah</button>
        </div>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
  </body>
</html>