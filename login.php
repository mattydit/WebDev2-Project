<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Review Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <link rel="icon" href="images/icon.jpg">
</head>
<body>
	<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Reviews Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
    <br><br>
    <div class="container">
        <h2>Login</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="login.php">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email address">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                <input type="submit" id="loginbtn" name="acc_login" value="Log in">
                
            </form>
        </div>
    </div>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="container-fluid text-center">
        <p>lorem</p>
    </footer>
</body>
</html>