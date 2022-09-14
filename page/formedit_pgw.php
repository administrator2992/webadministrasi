<?php
include("../config/koneksi.php");

	if (isset($_POST['edit'])) 
	{
		$id = $_POST['id'];
		$name = $_POST['nama_pegawai'];
		$nim = $_POST['id_pegawai'];
		$tl = $_POST['tempat_lahir_pegawai'];
		$tgl = $_POST['tanggal_lahir_pegawai'];
		$ahl = $_POST['departemen_pegawai'];
		$eml = $_POST['email_pegawai'];

		$query = "UPDATE data_pegawai SET nama_pegawai='$name', id_pegawai='$nim', tempat_lahir_pegawai='$tl', tanggal_lahir_pegawai='$tgl', departemen_pegawai='$ahl', email_pegawai='$eml' WHERE id='$id'";

		$query_run = mysqli_query($db, $query);

		if ($query_run) {
			echo '<script> alert("Data Update"); </script>';
			header("location:pegawai.php");
		}
		else
		{
			echo '<script> alert("Data Not Update"); </script>';
		}

	}

?>