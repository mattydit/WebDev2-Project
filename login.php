<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<link rel="icon" href="images/icon.jpg">
</head>
<body>
	<div class="login">
		<h2>Login</h2>
		<form method="post">
			Email: <input type="email" name="email" placeholder="Email" required><br>
			Password: <input type="password" name="password" placeholder="Password" required><br>
			<input type="submit" name="login_user" value="Login" id="loginBtn">
		</form>
	</div>

</body>
</html>