<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
     <link rel="icon" href="img/database.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>
     <form action="login/login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="login/signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>