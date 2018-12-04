<?php
    include 'server.php';
?>
<!-- Only users with accounts can post reviews -->
<?php if(!isset($_SESSION['email'])) : ?>
    <script type="text/javascript">
        alert("You must be logged in to write a review");
        window.location = "index.php";
    </script>
<?php else : ?>
    <script type="text/javascript">
        window.location = "review.php";
        return false;
    </script>
<?php endif ?>

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
                <li><a href="displayreview.php">Reviews</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!isset($_SESSION["email"])) : ?>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php else : ?>
                    <li class="active"><a href="review.php">Write Review</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
    <div class="main">
        
    </div>
    <br><br>
    <div class="container">
        <h2>Write a review</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <form method="post" action="server.php" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-grain"></i></span>
                    <input id="rname" type="text" class="form-control" name="rname" placeholder="Restaurant name" required>
                </div>
                <br>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
                    <textarea type="text" id="form7" class="md-textarea form-control" rows="3" name="review" required></textarea>
                </div>
                <br>
                <div class="input-group">
                    <label class="radio-inline"><input type="radio" name="rating" value="Like" required>Like</label>
                    <label class="radio-inline"><input type="radio" name="rating" value="Okay" required>Okay</label>
                    <label class="radio-inline"><input type="radio" name="rating" value="Dislike" required>Dislike</label>
                </div>
                <br>
                    <br>
                    <input type="file" name="fileUpload" id="fileUpload" style="padding-bottom: 10px;">
                    <input type="submit" name="rev" id="rev" value="Post" class="btn">
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