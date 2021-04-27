<?php
$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
//mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$Tenth = $_POST['10th'];
$Twelth = $_POST['12th'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    if($query = $connect->query("INSERT INTO `placement`.`addpdrive`(`CompanyName`,`Date`,`10th`,`12th`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
		VALUES ('$cname', '$date', '$Tenth', '$Twelth', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
} else
	die("Field Canniot be left blank");
} else
	die("You don't have Privilages");
?>
