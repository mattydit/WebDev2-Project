<?php
session_start();

//error_reporting(E_ALL ^ E_WARNING);

//Variables
$firstname = "";
$surname = "";
$email = "";
$password = "";

//connect to the DB

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "reviewdb";

$db = mysqli_connect($servername,$username,$password,$databasename);

if (mysqli_connect_errno())
{
  echo "Failed to connect to mysql: " . mysqli_connect_error();

}

//Registration
if (isset($_POST['acc_submit']))
{
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST[password] != $_POST[password_confirm])
    {
        echo "The passwords do not match";
    }
    else
    {
        $password = $_POST[password];
        $password = password_hash($password, PASSWORD_DEFAULT);

        //Register the account
        $query = "INSERT INTO account VALUES ('$firstname', '$surname', '$email', '$password')";
        mysqli_query($db,$query);

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

//Login
if (isset($_POST['acc_login']))
{
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    //$password = md5($password);
    
    $query = "SELECT * FROM account WHERE email='$email'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1)
    {
        while($row = mysqli_fetch_array($results))
        {
            if (password_verify($password, $row['password']))
            {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');         
            }
            else
            {
                //return false
                echo '<script>alert("Wrong email/password")</script';
            }
        }
       
    }
    else
    {
        array_push($errors, "Wrong email/password");
    }
}


//
if(isset($_POST['rev']))
{
    $q = "SELECT * FROM account WHERE email = $_SESSION['email']";
    $r = mysqli_query($db,$q);
    $page = mysqli_fetch_assoc($r);
    $reviewer = $page['fname'];
    $rname = $_POST['rname'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    $query = "INSERT INTO review VALUES ('$reviewer','$rname','$review','$rating')";
    echo "$reviewer";
    mysqli_query($db,$query);
}
