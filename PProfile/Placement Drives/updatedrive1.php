<?php
$connect = mysqli_connect("localhost", "root", "", "placement"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
	$usn = $_POST['uid'];	
	$name = $_POST['sname'];
	$comname = $_POST['comname'];
	$date = $_POST['Date'];
	$attend = $_POST['Attendance'];
	$wt = $_POST['WrittenTest'];
	$gd = $_POST['GD'];
	$tech = $_POST['Tech'];
	$placed = $_POST['Placed'];
	// $query = $connect->query("INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendance, WT, GD, Techical, Placed) VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')");
	if($query = $connect->query("INSERT INTO `placement.updatedrive` `(USN, Name, CompanyName, Date, Attendance, WT, GD, Techical, Placed)` VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')"))
	{
		echo "<center>Data Inserted successfully...!!</center>";
	}
	else
	{ 
		echo "<center>FAILED</center>";
	}
}
?>