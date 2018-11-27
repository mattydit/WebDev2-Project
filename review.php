<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Write Review</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
		<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Yurt Reviews</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="review.html">Reviews</a></li>
                <li><a href="featured.html">Featured</a></li>
                <li><a href="events.html">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
    </div>
    
		<div class="row content">
			<div class="col-sm-2 sidenav">
			</div>
			<!-- center grid -->
			<div class="col-sm-8 text-left">
				<div class="md-form">
					<label for="restaurant">Restaurant Name</label>
					<input type="text" id="restaurant" class="form-control">
				</div>
				<div class="md-form">
					<div class="md-form">
						<label for="form7">Review</label>
	    				<textarea type="text" id="form7" class="md-textarea form-control" rows="3" name="review"></textarea>
	    			</div>
	    			<input type="file" name="file">
	    			<input type="submit" name="rev" value="Post">
	    			<form action="index.html">
	    				<input type="submit" value="Cancel">
	    			</form>
	    		</div>
			</div>
			<div class="col-sm-2 sidenav">
			</div>
		</div>
	</div>
</body>
</html>