<?php
include 'server.php';

if(isset($_REQUEST["term"]))
{
  $query = "SELECT * FROM review WHERE rname LIKE ?";

  if($statement = mysqli_prepare($db, $query))
  {
    mysqli_stmt_bind_param($statement, "s", $param);

    $param = $_REQUEST["term"] . '%';

       if(mysqli_stmt_execute($statement))
       {
           $result = mysqli_stmt_get_result($statement);

           // Check number of rows in results.
           if(mysqli_num_rows($result) > 0)
           {
               // Fetch result rows.
               while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
               {
                   //echo "<p>" . $row["rname"] . "</p>";
                   //Display the results as a link.
                   echo "<a href=\"result.php\">" . $row["rname"] . "</a>" . "<br><br>";
               }
           }
           else
           {
               echo "<p>No reviews found</p>";
           }
       }
       else
       {
           echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
       }

    }
   // Close statement
   mysqli_stmt_close($statement);

}
