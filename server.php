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
        //array_push($errors, "Wrong email/password");
    }
}

//Change password
if (isset($_POST['change_pass']))
{

  $password_field = $_POST['new_password'];

  $new_pass = mysqli_real_escape_string($db, $password_field);
  $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

  $query = "UPDATE account SET password ='$new_pass' WHERE email ='$email'";
  if (mysqli_query($db, $query) == TRUE)
  {
    echo '<script>alert("Updated successfully")</script';
  }
  else
  {
    echo '<script>alert("Error updating")</script';
  }
  header('location: myaccount.php');
}

//
if(isset($_POST['rev']))
{
    $fileUpload = $_FILES['fileUpload'];

    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['error'];
    $fileType = $_FILES['fileUpload']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpeg','jpg','png','gif');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                //Give image unique name to prevent overwriting
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $target_dir = 'images/userImages/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $target_dir);
                //move_uploaded_file("images/userImages/"."filename".$fileNameNew);
            }else{
                echo "File is too large";
            }
        }else{
            echo "Error uploading file";
        }
    }else{
        echo "Invalid file type";
    }


    $rname = $_POST['rname'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    $q = "INSERT INTO review VALUES ('$rname','$review','$rating')";
    mysqli_query($db,$q);

    header('location: index.php?reviewsent');
}

?>