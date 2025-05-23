<?php
require_once "../config/koneksi.php"
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
    <script src="https://kit.fontawesome.com/2504d5bded.js" crossorigin="anonymous"></script>

    <title>Data Mahasiswa</title>
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
			    <a class="nav-link text-white"><i class="fas fa-user-graduate mr-4"></i>Daftar Mahasiswa</a><hr class="bg-white">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-3"></i>Daftar Dosen</a><hr class="bg-white">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-tie mr-4"></i>Daftar Pegawai</a><hr class="bg-white">
			  </li>
			  </li>
			</ul>
		</div>
		<div class="com-md-10 p-5 pt-2">
			<h3><i class="fas fa-user-graduate mr-4"></i>DAFTAR MAHASISWA</h3><hr width="100%">

			<!-- Modal -->
					<div class="modal fade" id="tambahMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form method="POST" action="../config/tambah_mhs.php">
					      <div class="modal-body">

					      	<input type="hidden" name="id_mahasiswa" id="id_mahasiswa">

					        <div class="form-group">
					        	<label>Nama</label>
					        	<input class="form-control" type="text" name="nama_mahasiswa">
					        </div>

					        <div class="form-group">
					        	<label>NIM</label>
					        	<input class="form-control" type="text" name="nim_mahasiswa">
					        </div>

					        <div class="form-group">
					        	<label>Tempat Lahir</label>
					        	<input class="form-control" type="text" name="tempat_lahir_mahasiswa">
					        </div>

					        <div class="form-group">
					        	<label>Tgl Lahir</label>
					        	<input class="form-control" id="start" type="date" name="tanggal_lahir_mahasiswa">
					        </div>

					        <div class="form-group">
					        	<label>Email</label>
					        	<input class="form-control" type="text" name="email_mahasiswa">
					        </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					        <button type="submit" class="btn btn-primary">Simpan</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>

			<a data-toggle="modal" data-target="#tambahMahasiswa" title="Edit" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA MAHASISWA</a>
			<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			      <th>NO</th>
			      <th>NAMA MAHASISWA</th>
			      <th>NIM</th>
			      <th>TEMPAT TANGGAL LAHIR</th>
			      <th>E-MAIL</th>
			      <th colspan="3" scope="col"></th>
			    </tr>
			    <?php
			    include ("../config/koneksi.php");

			    $sql = "SELECT * FROM data_mahasiswa";
			    $hasil = mysqli_query($db, $sql) or exit("Error query : <b>".$sql."</br>");
			    $i = 0;
			    while ($data = mysqli_fetch_assoc($hasil)) { 
			    	$i++
			    ?>	
			    	
					<!-- Modal -->
					<div class="modal fade" id="dataMahasiswa<?php echo $data['id_mahasiswa'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form method="POST" action="formedit_mhs.php">
					      <div class="modal-body">

					      	<input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $data['id_mahasiswa'];?>">

					        <div class="form-group">
					        	<label>Nama</label>
					        	<input class="form-control" type="text" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" >
					        </div>

					        <div class="form-group">
					        	<label>NIM</label>
					        	<input class="form-control" type="text" name="nim_mahasiswa" value="<?php echo $data['nim_mahasiswa']; ?>">
					        </div>

					        <div class="form-group">
					        	<label>Tempat Lahir</label>
					        	<input class="form-control" type="text" name="tempat_lahir_mahasiswa" value="<?php echo $data['tempat_lahir_mahasiswa']; ?>">
					        </div>

					        <div class="form-group">
					        	<label>Tgl Lahir</label>
					        	<input class="form-control" id="start" type="date" name="tanggal_lahir_mahasiswa" value="<?php echo $data['tanggal_lahir_mahasiswa']; ?>">
					        </div>

					        <div class="form-group">
					        	<label>Email</label>
					        	<input class="form-control" type="text" name="email_mahasiswa" value="<?php echo $data['email_mahasiswa']; ?>">
					        </div>
					       
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="hapus<?php echo $data['id_mahasiswa'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title"  id="exampleModalLabel">Hapus</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <form action="../config/hapus_mhs.php" method="POST">
					      	<div class="modal-body">
					   
					        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa" value="<?php echo $data['id_mahasiswa'];?>">
					        <h4>Yakin Ingin Menghapus ?</h4>

					      	</div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
					      </div>
					    </form>
					    </div>
					  </div>
					</div>

				    <tr>
				    	<td align="center" hidden><?php echo $data['id_mahasiswa'];?></td>
				    	<td align="center"><?php echo $i ?></td>
				    	<td><?php echo $data['nama_mahasiswa'];?></td>
				    	<td align="center"><?php echo $data['nim_mahasiswa'];?></td>
				    	<td><?php echo $data['tempat_lahir_mahasiswa'],', ', $data['tanggal_lahir_mahasiswa'];?></td>
				    	<td><?php echo $data['email_mahasiswa'];?></td>

				    	<td><a type="button" class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="modal"data-target="#dataMahasiswa<?php echo $data['id_mahasiswa'];?>" title="Edit"></i></td>

				    	<td><a type="button" data-toggle="modal" data-target="#hapus<?php echo $data['id_mahasiswa'];?>" class="fas fa-trash-alt bg-danger p-2 text-white rounded" title="Delete"></a></td>
				    </tr>
			    <?php } ?>
				</thead>
			</table>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="css/admin.js"></script>
  </body>
</html>