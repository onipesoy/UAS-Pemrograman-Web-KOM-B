<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "phpLABPW";
    $koneksi = mysqli_connect ($host, $user, $pass) or die ("koneksi database gagal ");
    mysqli_select_db($koneksi, $name);
?>