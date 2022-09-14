<?php 
session_start();
include "../config/koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else if($uname === 'admin'){
		$pass = md5($pass);

		$sql = "SELECT * FROM data_admin WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../page/dash.php"); //ganti ke dashboard
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../index.php?error=Incorect User name or password");
	        exit();
		}
	}else {
		$pass = md5($pass);

		$sql = "SELECT * FROM data_user WHERE nama_user='$uname' AND password='$pass'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['nama_user'] === $uname && $row['password'] === $pass) {
            	$_SESSION['nama_user'] = $row['nama_user'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../user/dash.php"); //ganti ke dashboard
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect username or password");
		        exit();
			}
		}else{
			header("Location: ../index.php?error=Incorect username or password");
	        exit();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}