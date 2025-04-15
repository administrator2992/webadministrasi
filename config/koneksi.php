<?php
// deklarasi parameter koneksi database
$server   = "0.0.0.0";
$username = "root";
$password = "";
$database = "web_db";

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>
