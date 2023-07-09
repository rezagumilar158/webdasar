<?php

// Kalo Mau Nyontek Disesuaikan Lagi ya Brow 
$host = "localhost";
$user = "root";
$pass = "";
$dbs  = "mahasiswa";

$conn = new mysqli($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0) {
?> 
        
        
        <table border="1" cellpadding="10" cellspacing="0">
        <?php
        while($row = $hasil->fetch_assoc()) {
        ?>
        <tr>
        <?php
        // Jika Terdapat Error Tinggal Menyesuaikan dengan Database atau table yang di buat di MariaDB
            echo "<td>".$row['nim']."</td><td>"
                 .$row['nama']."</td><td>"
                 .$row['jenis_kelamin']."</td><td>"
                 .$row['tempat_lahir']."</td><td>"
                 .$row['tanggal_lahir']."</td><td>"
                 .$row['alamat']."</td>";
        ?>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php

    }
} else {
    echo "perintah gagal dijalankan";
}