<?php
$connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$campool = $_POST['campool'];
$poolven = $_POST['pcv'];
$10th = $_POST['10th'];
$12th = $_POST['12th'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    if($query = mysql_query("INSERT INTO addpdrive(CompanyName, Date, campusPool, poolcampusVenue, 10th, 12th, BEAgg, CurrentBacklogs, HistoryBacklogs, BreakStudies, otherDetails)
		VALUES ('$cname', '$date', '$campool', '$poolven', '$10th', '$12th', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
}
}
?>