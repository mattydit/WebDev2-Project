<?php
include 'server.php';

//Change password
if (isset($_POST['change_pass']))
{
  $email = $_SESSION["email"];

  $new_pass = mysqli_real_escape_string($db, $_POST['new_password']);
  $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

  $query = "UPDATE account SET password = '$new_pass' WHERE email = '$email'";
  if ($db->query($query) == TRUE)
  {
    echo '<script>alert("Updated successfully")</script';
  }
  else
  {
    echo '<script>alert("Error updating")</script';
  }
  header('location: myaccount.php');
}

//Delete Account
if (isset($_POST['delete']))
{
  $email = $_SESSION["email"];

  $query = "DELETE FROM account WHERE email = '$email'";

  if ($db->query($query) == TRUE)
  {
    echo '<script>alert("Updated successfully")</script';
  }
  else
  {
    echo '<script>alert("Error updating")</script';
  }
  session_destroy();
  header('location: index.php');
}

//Password Recovery
if (isset($_POST['acc_submit']))
{
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $query = "SELECT * FROM account WHERE email='$email'";

  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1)
  {
    $token = uniqid();
    $msg = "Your recovery code\n{$token}";

    mail($email, "Review Portal: Password Recovery", $msg);
  }
}
