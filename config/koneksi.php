<?php
// deklarasi parameter koneksi database
$server   = "sql303.infinityfree.com";
$username = "if0_38754998";
$password = "rNCCuZ8sDM";
$database = "if0_38754998_web_db";

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>
