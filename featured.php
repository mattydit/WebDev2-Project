<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Featured Restaurants</title>
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
                <a class="navbar-brand" href="index.php">Yurt Reviews</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li class="active"><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>	
</body>
</html>