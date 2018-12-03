<?php include 'server.php'; ?>
<?php include 'account.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Review Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="scripts.js" type="text/javascript"></script>
		<meta charset="utf-8">
    <link rel="icon" href="images/icon.jpg">
</head>
<body>
	<div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    Reviews Portal
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="displayreview.php">Reviews</a></li>
                <li><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION["email"])) : ?>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php else : ?>
                    <li><a href="review.php">Write Review</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <br><br>
    <div class="container">
			<h2>My Account</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<?php
					$sql = "SELECT * FROM account WHERE email = '".$_SESSION['email']."'";
				    $result = mysqli_query($db,$sql);
				    $resultCheck = mysqli_num_rows($result);

				    if($resultCheck > 0){
				        while($row = mysqli_fetch_assoc($result)){
				        	echo "<div>";
				        	echo '<img style="width: 200px; height: 200px; float: left; padding-right: 10px;" src="images/profileImage/' . $row["image"].'">';
				        	echo "</div>";
				        }
				    }
					?>
					<br>
					<h1>Edit account details:</h1><br>
					<button type="button" class="btn btn-primary" onclick="showhide('changePass');">Change Password</button>
					<br><br>
					<div id="changePass">
						<form method="post" action="myaccount.php" style="width: 50%;">
							<div class="form-group">
								<label for="new_password">New Password:</label>
								<input type="password" class="form-control" name="new_password" id="new_password" required>
							</div>
							<div class="form-group">
								<label for="confirm_new">Confirm Password:</label>
								<input type="password" class="form-control" name="confirm_new" id="confirm_new" required>
							</div>
							<input type="submit" class="btn btn-success" name="change_pass" value="Confirm">
						</form>
					</div>
					<form method="post" action="server.php" enctype="multipart/form-data">
						<label for="profileUpload">Change profile picture</label>
						<input type="file" name="profileUpload" id="profileUpload">
						<input type="submit" name="updateProfile" id="updateProfile">
					</form>
					<br><br>
					<button type="button" class="btn btn-danger" onclick="showhide('deleteAccount');">Delete Account</button>
					<br><br>
					<div id="deleteAccount">
						<form method="post" action="myaccount.php" style="width: 50%;">
							<div class="form-group">
								<label for="deleteConfirm">Please type "delete" in the box below:</label>
								<input type="text" class="form-control" name="deleteConfirm" id="deleteConfirm" required>
							</div>
							<input type="submit" class="btn btn-danger" name="delete" value="Confirm">
						</form>
					</div>
				</div>
			</div>
		</div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="container-fluid text-center">
        <p>lorem</p>
    </footer>
</body>
</html>
