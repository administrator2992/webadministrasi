<?php
include("../config/koneksi.php");

	if (isset($_POST['edit'])) 
	{
		$id = $_POST['id_mahasiswa'];
		$name = $_POST['nama_mahasiswa'];
		$nim = $_POST['nim_mahasiswa'];
		$tl = $_POST['tempat_lahir_mahasiswa'];
		$tgl = $_POST['tanggal_lahir_mahasiswa'];
		$eml = $_POST['email_mahasiswa'];

		$query = "UPDATE data_mahasiswa SET nama_mahasiswa='$name', nim_mahasiswa='$nim', tempat_lahir_mahasiswa='$tl', tanggal_lahir_mahasiswa='$tgl', email_mahasiswa='$eml' WHERE id_mahasiswa='$id'";

		$query_run = mysqli_query($db, $query);

		if ($query_run) {
			echo '<script> alert("Data Update"); </script>';
			header("location:mahasiswa.php");
		}
		else
		{
			echo '<script> alert("Data Not Update"); </script>';
		}

	}

?>