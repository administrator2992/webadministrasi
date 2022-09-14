<?php
include("koneksi.php");

if(isset($_POST['tambah']))

{
	$sql = "INSERT INTO data_pegawai(nama_pegawai, id_pegawai, tempat_lahir_pegawai, tanggal_lahir_pegawai, departemen_pegawai, email_pegawai)";

	$sql.= "VALUES ('".$_POST['nama_pegawai']."','".$_POST['id_pegawai']."','".$_POST['tempat_lahir_pegawai']."','".$_POST['tanggal_lahir_pegawai']."','".$_POST['departemen_pegawai']."','".$_POST['email_pegawai']."')";

	mysqli_query($db, $sql) or exit("Error query : <b>".$sql."</br>");

	header("location:../page/pegawai.php");
}



?>