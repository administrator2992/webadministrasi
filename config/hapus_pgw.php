<?php
include("koneksi.php");

if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	$sql = "DELETE FROM data_pegawai WHERE id= '$id'";
	$query_run = mysqli_query($db, $sql);

	if($query_run) {
		header("location:../page/pegawai.php");
	}
	else {
		echo '<script> alert("Data Not Deleted"); </script>';
	}
}


?>