<?php
session_start();

error_reporting(E_ALL ^ E_WARNING);

//Variables
$firstname = "";
$surname = "";
$email = "";
$password = "";

//connect to the DB
$db = mysqli_connect("localhost", "root", "", "reviewdb");

if (mysqli_connect_errno())
{
  echo "Failed to connect to mysql: " . mysqli_connect_error();

}

//Regostration
if (isset($_POST['acc_submit']))
{
    if($_POST[password] != $_POST[password_confirm])
    {
        echo "The passwords do not match";
    }
    else
    {
        $password = $_POST[password];
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //Register the account
        $sql = "INSERT INTO account (firstname, surname, email, password)
        VALUES ('$_POST[firstname]', '$_POST[surname]', '$_POST[email]', '$password')";
        
        if (!mysqli_query($db, $sql))
        {
            die('Error: '. mysqli_error());
        }
    }
}