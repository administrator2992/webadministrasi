<?php
include("../config/koneksi.php");

	if (isset($_POST['edit'])) 
	{
		$id = $_POST['id'];
		$name = $_POST['nama'];
		$nim = $_POST['NIDN'];
		$tl = $_POST['tempat'];
		$tgl = $_POST['tanggal'];
		$ahl = $_POST['keahlian'];
		$eml = $_POST['email'];

		$query = "UPDATE data_dosen SET nama='$name', NIDN='$nim', tempat='$tl', tanggal='$tgl', keahlian='$ahl', email='$eml' WHERE id='$id'";

		$query_run = mysqli_query($db, $query);

		if ($query_run) {
			echo '<script> alert("Data Update"); </script>';
			header("location:dosen.php");
		}
		else
		{
			echo '<script> alert("Data Not Update"); </script>';
		}

	}

?>