<?php
include("koneksi.php");

$sql = "INSERT INTO data_mahasiswa(nama_mahasiswa, nim_mahasiswa, tempat_lahir_mahasiswa, tanggal_lahir_mahasiswa, email_mahasiswa)";

$sql.= "VALUES ('".$_POST['nama_mahasiswa']."','".$_POST['nim_mahasiswa']."','".$_POST['tempat_lahir_mahasiswa']."','".$_POST['tanggal_lahir_mahasiswa']."','".$_POST['email_mahasiswa']."')";

mysqli_query($db, $sql) or exit("Error query : <b>".$sql."</br>");

header("location:../page/mahasiswa.php");

?>