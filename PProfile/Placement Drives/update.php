<?php
  session_start();
  if(isset($_SESSION["pusername"])){
   
  }
   else
	   header("location: index.php")
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
    <link rel="icon" href="../images/logo.jpg" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement- Update Details</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Update Drive Details</h1>
        </header>
        <div class="profile-photo-container">
          <img src="../images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
        <ul>
            <li><a href="../login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li> 
            <li><a href="../Placement Drives.php" class="active"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>           
            <li><a href="../manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
            <li><a href="../Students Eligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
            <li><a href="../logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../../Homepage/index.php">Home</a></li>
                <li><a href="../../Drives/products.php">Drives Home</a></li>
                <li><a href="../Notif.php">Notifications</a></li>
                <li><a href="../Change Password.php">Change Password</a></li>
              </ul>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Placement Drives</h2>
            <p>Update Students Details</p>
            <form action="updatedrive1.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="UID">UID</label>
                  <input type="text" name="uid" class="form-control" id="inputuid" placeholder="Username">
                </div>
                
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Name">Student Name</label>
                  <input type="text"  name="sname" class="form-control" id="inputName" placeholder="Student Name">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Name">Company Name</label>
                  <input type="text"  name="comname" class="form-control" id="inputName" placeholder="Company Name">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date</label>
                  <input type="date" name="Date" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Attendance">Attendance</label>
			    <select name="Attendance" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
				</select>
                 </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="written test">Written Test</label>
				<select name="WrittenTest" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
			    </select>                 
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Group disscussion"> Group Disscussion</label>
				<select name="GD" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
				</select> 
                </div>				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="Technical">Technical</label>
                 	<select name="Tech" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
			    </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Placed</label>
                  <select name="Placed" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
                    <option value="0">N</option>                   
                  </select>
				  </div>
				  <br>				  
              <div class="form-group text-right">
                <button type="submit"  name="submit" class="templatemo-blue-button">submit</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>
</html>