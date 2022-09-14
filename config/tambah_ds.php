<?php
include("koneksi.php");

if(isset($_POST['tambah']))

{
	$sql = "INSERT INTO data_dosen(nama, NIDN, tempat, tanggal, keahlian, email)";

	$sql.= "VALUES ('".$_POST['nama']."','".$_POST['NIDN']."','".$_POST['tempat']."','".$_POST['tanggal']."','".$_POST['keahlian']."','".$_POST['email']."')";

	mysqli_query($db, $sql) or exit("Error query : <b>".$sql."</br>");

	header("location:../page/dosen.php");
}



?>