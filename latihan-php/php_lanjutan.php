<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hey Hello</h1>
    <?php
    /*  |===================================================================
        |--------------------TIPE DATA STRING DAN INTEGER-------------------
        |===================================================================
    */
            $tipe_data="Santay Dulu"; // tipe data string bang
            $tipe_data= 5; // tipe data integer
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
    /*  |================================================================
        |--------------------TIPE DATA FLOAT / PECAHAN-------------------
        |================================================================
    */
        $pecahan = 5.85; // tipe data float / pecahan
    ?>

    <h2>Saya Menampilkan Pecahan ini Gaes <?=$pecahan?></h2>


    <?php
    /*  |========================================================
        |--------------------TIPE DATA BOOLEAN-------------------
        |========================================================
    */
        $perbandingan = true; //tipe data boolean

        echo $perbandingan;
        echo "</br>";
    ?>



<?php
    /*  |========================================================
        |--------------------TIPE DATA ARRAY---------------------
        |========================================================
    */


    /*
        $provinsi[0] = "Jawa Barat";
        $provinsi[1] = "DKI JAKARTA";
        $provinsi[2] = "Kalimantan Barat";

    */

        $provinsi = array("Jawa Barat",
        "DKI JAKARTA",
        "Kalimantan Barat");
        $provinsi;



        $hasil = 5;

            echo $hasil--;
            echo "<br/>";
            echo $hasil;
            echo "<br/>";

            define("SATU", 1);

            echo SATU;

            echo "<br/>";
             /* if($perbandingan == true) {
                echo "ucapkan selamat pagi";
            } else {
                echo "ucapkan selamat";
            }
            */
            /* $perbandingan = 4;
            switch($perbandingan) { // percabangan
                case 1:
                    $pesan = "soto ayam";
                break;
                case 2:
                    $pesan = "ayam goreng";
                break;
                default:
                    $pesan = "engga ding";
            }
 
            echo $pesan; */

            $pesan = ($hasil == 2) ? "santai saja" : "salah";

            echo $pesan;
            echo "<br/>";
            
            $provinsi = array("Jawa Timur", 
                              "DKI Jakarta",
                              "IKN",
                              "Jawa Tengah",
                              "Jawa Barat");

            foreach($provinsi as $key) {
                echo $key;
                echo "<br/>";
            }

            $i=1;

            while($i<5) {
                echo "topi bundar <br/>";
                $i++;
            }
    ?>
    <!--
    <?php for ($i=0; $i<100; $i++) { ?>
        <h2>Hello World</h2>
    <?php } ?>
    -->

    

</body>
</html>