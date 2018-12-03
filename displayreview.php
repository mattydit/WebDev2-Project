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
                <a class="navbar-brand" href="index.php">Reviews Portal</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="review.php">Reviews</a></li>
                <li><a href="featured.php">Featured</a></li>
                <li><a href="events.php">Events</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION["email"])) : ?>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php else : ?>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>

    <?php


    $sql = "SELECT * FROM review;";
    $result = mysqli_query($db,$sql);
    $resultCheck = mysqli_num_rows($result);
    $rname = array();

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $rname = $row['rname'];
                    echo $rname;
        }
    }
    echo "<div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left">
                        <?php "<img src=".$image_query_fetch['image'];?>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $row['rname']; ?></h4>
                        <p>Rating: </p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    ?>



</body>
</html>