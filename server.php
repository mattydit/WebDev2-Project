<?php
session_start();

error_reporting(E_ALL ^ E_WARNING);

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

//
if(isset($_POST['rev']))
{
    $rname = $_POST['rname'];
    $review = $_POST['review'];
    $rating = $_POST['optradio'];

    $query = "INSERT INTO review VALUES ($rname','$review','$rating')";
    mysqli_query($db,$query);
}
