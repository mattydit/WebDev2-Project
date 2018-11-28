<?php
	include 'server.php';
	
?>
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
                <a class="navbar-brand" href="#">Reviews Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="review.php">Reviews</a></li>
                <li><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
	<div class="main">
		
	</div>
    <br><br>
    <div class="container">
        <h2>Write a review</h2>
    <div class="panel panel-default">
        <div class="panel-body" style="background-color: #f6f8f9;">
            <form method="post" action="review.php">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-grain"></i></span>
                    <input id="rname" type="text" class="form-control" name="rname" placeholder="Restaurant name">
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
                    <textarea type="text" id="form7" class="md-textarea form-control" rows="3" name="review"></textarea>
                </div>
                <br>
                <div class="input-group">
                    <label class="radio-inline"><input type="radio" name="optradio">Like</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Okay</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Dislike</label>
                </div>
                <br>
                	<input type="file" name="file">
                    <input type="submit" name="submitImage">
                    <br>
	    			<input type="submit" name="rev" value="Post" class="btn">
	    			<form action="index.php">
	    			<input type="submit" value="Cancel" class="btn" style="margin-left: 20px;">
            </form>
        </div>
    </div>
    </div>
    
    <br><br><br><br><br><br><br><br><br>
    <footer class="container-fluid text-center">
        <p>lorem</p>
    </footer>
</body>
</html>