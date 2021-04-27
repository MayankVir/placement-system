<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}

?>
<?php
$connect = mysqli_connect("localhost", "root", "","details"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$tenth = $_POST['10th'];
$twelth = $_POST['12th'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History'];
$detyear = $_POST['Dety'];
if($USN !=''||$email !='')
{
	if($USN == $sun)
    {
    if($query = $connect->query("INSERT INTO `details`.`basicdetails` ( `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `10th`, `12th`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`)
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$cursem', '$branch', '$10th', '$12th', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }


		else echo "FAILED";
}

else{
	  echo "<center>enter your USN only...!!</center>";
}
}
}
?>


<?php
$connect = mysqli_connect("localhost", "root", "","details"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['update']))
{
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$tenth = $_POST['10th'];
$twelth = $_POST['12th'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History'];
$detyear = $_POST['Dety'];

if($USN !=''||$email !='')
{
	if($USN == $sun)
	{

	$sql = $connect->query("SELECT * FROM `placement`.`basicdetails` WHERE `USN`='$USN'");
	if($sql->num_rows == 1)
	{

		if($query = $connect->query("UPDATE `placement`.`basicdetails` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `10th`='$tenth', `12th`='$twelth', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
           WHERE `basicdetails`.`USN` = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }

            else echo "<center>FAILED</center>";

	}
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your usn only</center>";
}
}
?>
