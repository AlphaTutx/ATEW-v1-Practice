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
	 
  <form method="post" action="index.php">
  	<?php include('errors.php'); ?>

  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>

  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	 </div>

  	<p>
	<!-- Replace "https://www.facebook.com/profile.php?id=100087598551338" to "register.php" to register new client"-->
  		Not yet a member? Please contact us. <a href="https://www.facebook.com/profile.php?id=100087598551338">Sign up</a>
  	</p> 

  </form>
</body>
</html>