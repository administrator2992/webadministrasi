<?php
include("koneksi.php");

if(isset($_POST['delete']))
{
	$id = $_POST['id_mahasiswa'];
	$sql = "DELETE FROM data_mahasiswa WHERE id_mahasiswa= '$id'";
	$query_run = mysqli_query($db, $sql);

	if($query_run) {
		header("location:../page/mahasiswa.php");
	}
	else {
		echo '<script> alert("Data Not Deleted"); </script>';
	}
}


?>