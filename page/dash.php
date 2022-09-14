<?php
require_once "../config/koneksi.php"
?>
<?php
	include("../config/koneksi.php");

	$sql="SELECT count(id_mahasiswa) AS total FROM data_mahasiswa";
	$result=mysqli_query($db, $sql);
	$values=mysqli_fetch_assoc($result);
	$num_rows=$values['total'];

	$sql2="SELECT count(id) AS total FROM data_dosen";
	$result2=mysqli_query($db, $sql2);
	$values2=mysqli_fetch_assoc($result2);
	$num_rows2=$values2['total'];

	$sql3="SELECT count(id) AS total FROM data_pegawai";
	$result3=mysqli_query($db, $sql3);
	$values3=mysqli_fetch_assoc($result3);
	$num_rows3=$values3['total'];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="https://kit.fontawesome.com/3a0e5a90f2.js" crossorigin="anonymous"></script>

    <title>Dashboard</title>
    <link rel="icon" href="../img/database.png" type="image/icon type">
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-light bg-info">
	  <a class="navbar-brand" href="dash.php">WELCOME CEO | <b>AMIKOM UNIVERSITY</b></a>
	    <div class="form-inline my-2 my-lg-0 ml-auto">
	    	<?php
			    include ("../config/koneksi.php");
			    session_start();
			    $id = $_SESSION['id'];
			    $sql = "SELECT * FROM data_admin WHERE id='$id'";
			    $hasil = mysqli_query($db, $sql) or exit("Error query : <b>".$sql."</br>");
			    $data = mysqli_fetch_assoc($hasil)
			?>
			    
	    	<h4 class="form-inline mr-sm-2 my-lg-0 ml-auto">Halo <?php echo $data['name'];?></h4>
	      	<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
				  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg>
			  </button>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="../login/change-password.php">Change Password</a>
			    <a href="../index.php" class="dropdown-item">Sign out</a>
			  </div>
			</div>
	    </div>

	</nav>

	<div class="row no-gutters mt-0">
		<div class="col-md-2 bg-dark mt-0 pr-3 pt-4">
			<ul class="nav flex-column ml-3 mb-5">
			  <li class="nav-item">
			    <a class="nav-link active text-white" href="dash.php"><i class="fas fa-home mr-4"></i>Dasboard</a><hr class="bg-white">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate mr-4"></i>Daftar Mahasiswa</a><hr class="bg-white">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-3"></i>Daftar Dosen</a><hr class="bg-white">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-tie mr-4"></i>Daftar Pegawai</a><hr class="bg-white">
			  </li>
			</ul>
		</div>
		<div class="com-md-10 p-5 pt-2">
			<h3><i class="fas fa-home mr-4"></i>Dashboard</h3><hr>
			<div class="row text-white">
				<div class="card bg-info ml-5 mb-5" style="width: 18rem;">
				  <div class="card-body">
				  	<div class="card-body-icon">
				  		<i class="fas fa-user-graduate mr-4"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH MHS</h5>
				    <div class="display-4"><?php echo $num_rows;?></div>
				  </div>
				</div>

				<div class="card bg-success ml-5 mb-5" style="width: 18rem;">
				  <div class="card-body">
				  	<div class="card-body-icon">
				  		<i class="fas fa-chalkboard-teacher mr-3"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH DOSEN</h5>
				    <div class="display-4"><?php echo $num_rows2;?></div>
				  </div>
				</div>

				<div class="card bg-danger ml-5 mb-5" style="width: 18rem;">
				  <div class="card-body">
				  	<div class="card-body-icon">
				  		<i class="fas fa-user-tie mr-4"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH PEGAWAI</h5>
				    <div class="display-4"><?php echo $num_rows3;?></div>
				  </div>
				</div>

			</div>

			<div class="row mt-5">
				<div class="card ml-5 text-white text-center mb-5" style="width: 18rem;">
				  <div class="card-header bg-info display-4 pt-4 pb-4">
				    <i class="fab fa-twitter-square"></i>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title text-info">TWITTER</h5>
				    <a href="https://twitter.com/" class="btn btn-info">FOLLOW</a>
				  </div>
				</div>

				<div class="card ml-5 text-white text-center mb-5" style="width: 18rem;">
				  <div class="card-header bg-primary display-4 pt-4 pb-4">
				    <i class="fab fa-facebook"></i>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title text-primary">FACEBOOK</h5>
				    <a href="https://www.facebook.com/" class="btn btn-primary">LIKE</a>
				  </div>
				</div>

				<div class="card ml-5 text-white text-center mb-5" style="width: 18rem;">
				  <div class="card-header bg-danger display-4 pt-4 pb-4">
				    <i class="fab fa-instagram-square"></i>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title text-danger">INSTAGRAM</h5>
				    <a href="https://www.instagram.com/" class="btn btn-danger">FOLLOW</a>
				  </div>
				</div>
			</div>	
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>