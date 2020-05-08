<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><b>Username:</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label><b>Password:</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<center><button type="submit" class="btn" name="login_user">Login</button></center>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php"><b>Sign up</b></a>
  	</p>
  </form>
</body>
</html>