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
                <li class="active"><a href="displayreview.php">Reviews</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION["email"])) : ?>
                    <li><a href="review.php">Write Review</a></li>
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
    <!-- where email = '".$_SESSION['email']."'" -->
    <?php
    $sql = "SELECT * FROM review";
    $result = mysqli_query($db,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){

            echo '<div class="container">';
            echo '<h2>' . $row['rname'] . '</h2>';
            echo '<div class="panel panel-default">';
            echo '<div class="panel-body">';
            echo '<img style="width: 300px; float: left; padding-right: 10px;" src="images/userImages/' . $row["image"].'">';
            echo '<p>' . $row['review'] . '</p>';
            echo "by " .$row['reviewer'];
            echo "<br>";
            echo "Rating: ".'<p>' . $row['rating'] . '</p>';
            
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }

    ?>



</body>
</html>