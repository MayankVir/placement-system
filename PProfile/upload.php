<?php         
$connect = mysqli_connect("localhost","root","", "placement");

echo "Coming  here";

if(isset($_POST["submit"])) 
{
    $subject = $_POST['Subject'];
    $msg = $_POST['Message'];
    if($subject!='' && $msg!='') 
    {
        if($query = $connect->query("INSERT INTO `placement`.`notifications`(`Subject`,`Message`) VALUES ('$subject', '$msg')"))
        {
            echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
    } else {
	    die("Field Canniot be left blank");
    }

}
else {
    die("DODOODO") ;
}

?>