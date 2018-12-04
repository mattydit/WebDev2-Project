<?php
    include('server.php');
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
                <a class="navbar-brand" href="index.php">
                    Reviews Portal
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="displayreview.php">Reviews</a></li>
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
    <div class="container">
        <h2>Featured Restaurants</h2>
    <div class="panel panel-default">
        <div class="panel-body">
        <!-- https://bootsnipp.com/snippets/featured/responsive-moving-box-carousel -youngfella -->
	       <div id="SlideShow" class="carousel slide" data-ride="carousel" style="width:  75%; margin: auto;">
                <ol class="carousel-indicators">
                    <li data-target="#SlideShow" data-slide-to="0" class="active"></li>
                    <li data-target="#SlideShow" data-slide-to="1"></li>
                    <li data-target="#SlideShow" data-slide-to="2"></li>
                    <li data-target="#SlideShow" data-slide-to="3"></li>

                    <div id="search-box">
                        <form action="/search.php">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </div>
               </ol>


               <!-- Wrapper for the slides -->
               <div class="carousel-inner">

                   <div class="item active">
                        <img src="images/img.jpeg">
                    </div>

                    <div class="item">
                        <img src="images/img2.jpg">
                   </div>

                   <div class="item">
                        <img src="images/img3.jpg">
                   </div>

                   <div class="item">
                        <img src="images/img4.PNG">
                   </div>
                   <!-- Controls -->
                   <a class="left carousel-control" href="#SlideShow" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                   </a>

                   <a class="right carousel-control" href="#SlideShow" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

               </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
      <h2>Recent Reviews</h2>
      <div class="panel panel-default">
        <div class="panel panel-body">
    <?php
    $sql = "SELECT * FROM review";
    $result = mysqli_query($db,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo '<a href="displayreview.php"';
          echo '</a>';
          echo '<img style="max-width: 300px; float: left; padding-right: 10px;" src="images/userImages/' . $row["image"].'">';
          //echo '<p>' . $row['rname'] . '</p>';
        }
    }
    ?>
  </div>
</div>
</div>
</a>

	<div class="container">
		<h2>News</h2>
		<div class="panel panel-default">
            <div class="panel-body">Ut te transferrem non ubi appellat
                adipisicing, multos commodo te
                despicationes, et e tamen quibusdam sed
                officia quae singulis singulis id
                appellat eram malis aut noster est quid
                incurreret ea mandaremus ut o non duis
                labore duis. Quem senserit ita probant
                id deserunt aut possumus, ita hic fore
                quid duis sed si elit appellat, iis nam
                arbitrantur eu anim cohaerescant nescius
                duis nescius, magna offendit incididunt,
                singulis noster fabulas. Deserunt duis
                expetendis, quo ipsum irure te
                excepteur. Mentitum veniam senserit
                occaecat do litteris veniam de proident
                eruditionem. Ingeniis lorem quorum
                vidisse elit iis ex labore expetendis,
                quorum qui tempor de quid ab si aliquip
                familiaritatem do est fugiat voluptate,
                cernantur ex quorum voluptate,
                mandaremus quid quamquam, magna ingeniis
                fabulas. Enim cernantur probant ex velit
                senserit nam varias fore, non singulis
                qui doctrina e et fore laborum se labore
                cupidatat te adipisicing, litteris
                veniam ullamco admodum se enim qui
                singulis et amet, possumus an quis
                probant. Qui e cillum legam enim, non
                noster admodum fidelissimae.</div>
		</div>
	</div>
    <footer class="container-fluid text-center">
    </footer>
</body>
</html>
