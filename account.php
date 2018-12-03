<?php
include 'server.php';

//Change password
if (isset($_POST['change_pass']))
{

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
