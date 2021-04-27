<?php
	session_start();

	$UID1 = $_POST['UID'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	$UID2 = ($_SESSION['reset']);

	$connect = mysqli_connect("localhost", "root", "", "placement"); // Establishing Connection with Server
    // mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server

			if($UID1 && $password && $confirm ){


	if($password == $confirm) {

		if($UID2 == $UID1){
		if($sql = $connect->query("UPDATE `placement`.`slogin` SET `PASSWORD` ='$password' WHERE `slogin`.`UID` = '$UID1'")){
		echo "<center>Password Reset Complete</center>";
		session_unset();
		}
		} else {
			session_unset();
			die("Enter Your UID only");

			}
	} else
	{
	echo "Update Failed";
	session_unset();
	}
	}
	else
	{
	echo "Field cannot be left blank";
	session_unset();
	}
?>
