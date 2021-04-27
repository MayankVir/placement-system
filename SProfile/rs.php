<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "placement"); // Establishing Connection with Server
   // mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server

  $UID = $_POST['UID'];
  $Question = $_POST['Question'];
  $Answer = $_POST['Answer'];
  $check = $connect->query("SELECT * FROM slogin WHERE UID='".$UID."'") or die("Check Query");
 if($check->num_rows!= 0)
 {
	 $row = $check->fetch_assoc();
	 $dbQuestion = $row['Question'];
	 $dbAnswer = $row['Answer'];
  if($dbAnswer==$Answer)
  {
     $_SESSION['reset'] = $UID;
	   header("location: Reset password.php");

  }
  else
	  echo "<center>Failed! Incorrect Credentials</center>";
 } else
 echo "<center> Enter Something Correctly Champ!!! </center>";

    /*if($query = mysql_query("INSERT INTO slogin(Fullname, UID ,PASSWORD,Email,Question,Answer) VALUES ('$Name', '$UID', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";

    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This UID already exists</center>";
  }
 }*/
?>
