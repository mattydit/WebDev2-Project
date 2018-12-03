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
                <li><a href="review.php">Reviews</a></li>
                <li><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION["email"])) : ?>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php else : ?>
                    <li class="active"><a href="myaccount.php">My Account</a></li>
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
					Edit account details:<br><br>
					<button type="button" class="btn btn-primary" onclick="showhide('changePass');">Change Password</button>
					<br><br>
					<div id="changePass">
						<form name="passwordForm" method="post" action="myaccount.php" onsubmit="return(validatePassword());" style="width: 50%;">
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
					<button type="button" class="btn btn-primary" onclick="showhide('');">Change Profile Picture</button>
					<br><br>
					<button type="button" class="btn btn-danger" onclick="showhide('deleteAccount');">Delete Account</button>
					<br><br>
					<div id="deleteAccount">
						<form name="deleteForm" method="post" action="myaccount.php" onsubmit="return(deleteCheck());" style="width: 50%;">
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
