<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT DATA DIRI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div class="col-lg-4 col-xxl-4 my-5 mx-auto">
    <h1 class="text-center">EDIT DATA DIRI</h1>
    <?php
// Disesuaikan Lagi sama database Connectionnya
include_once("connection.php");
 
// Disesuaikan sama Yang ada di phpmyadmin
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
        
    // update user data
    $result = mysqli_query($connection, "UPDATE data_diri SET nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',alamat='$alamat' WHERE id=$id");

    // Check if query was successful or not
    if($result){
        // Redirect to homepage to display updated user in list
        header("Location: index.php");
    } else {
        // Display error message
        echo "Error: " . mysqli_error($connection);
    }
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Disesuaikan Lagi sama database Connectionnya
$result = mysqli_query($connection, "SELECT * FROM data_diri WHERE id=$id");
 

// Disesuaikan sama Yang ada di phpmyadmin

while($row = mysqli_fetch_array($result))
{
        $nim = $row['nim'];
        $nama = $row['nama'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $tempat_lahir = $row['tempat_lahir'];
        $tanggal_lahir = $row['tanggal_lahir'];
        $alamat = $row['alamat'];
}
?>
        
        
        <!-- Disesuaikan lagi sama Databasenya -->
    <form class="row needs-validation" action="edit.php" method="post" novalidate>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">NIM</label>
            <input type="text" class="form-control" id="validationCustom01" name="nim" value="<?php echo $nim;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom02" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="validationCustom02" name="nama" value="<?php echo $nama;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">JENIS KELAMIN</label>
            <input type="text" class="form-control" id="validationCustom03" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
            <div class="invalid-feedback">
            Please select a valid gender.
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom04" class="form-label">TEMPAT LAHIR</label>
            <input type="text" class="form-control" id="validationCustom04" name="tempat_lahir" value="<?php echo $tempat_lahir;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">TANGGAL LAHIR</label>
            <input type="text" class="form-control" id="validationCustom05" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom06" class="form-label">ALAMAT</label>
            <textarea class="form-control" id="validationCustom06" name="alamat" required><?php echo $alamat;?></textarea>
        </div>
        <div>
        <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary btn-large" type="submit" name="update" value="Update">Tambah</button>
        </div>
    </form>
</div>
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
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