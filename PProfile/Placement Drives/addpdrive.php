<?php
  session_start();
  if($_SESSION["pusername"]){
  }
   else {
	   header("location: ../index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
    <link rel="icon" href="../images/logo.jpg" type="image/icon">
      
    <!-- <link rel="shortcut icon" href="favicon.png" type="image/icon">
    <link rel="icon" href="favicon.png" type="image/icon"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement- Drives</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
  
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		  ?>
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
                <li><a href=".././Placement Drives/Companydetails.php">Drives</a></li>
                <li><a href="../Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">ADD PLACEMENT DRIVE</h2>
            <p>Update drive</p>
            <form action="add pdrive1.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
              
			  <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">Company Name</label>
                  <input type="text" name="compny" class="form-control" id="inputFirstName" placeholder="company">
                </div>
				</div>
				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date</label>
                  <input type="date" name="date" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
              
				</div>
				<div class="row form-group">
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="10th">10th</label>
                  <input type="text" name="10th" class="form-control" id="10th" placeholder="">
                </div>
				<div class="row form-group">
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="12th">12th</label>
                  <input type="text" name="12th" class="form-control" id="12th" placeholder="">
                </div>
				</div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">BE Aggregate</label>
                  <input type="text" name="beagg" class="form-control" id="BE" placeholder="">
                </div>
				<div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="curback" class="form-control">
                    <option value="select">Numbers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
				</div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">History of Backlogs</label>
                  <select name="hob" class="form-control">
                    <option value="Y/N">Y/N</option>
                    <option value="1">Y</option>
                    <option value="0">N</option>
                  </select>
                </div>
				<div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Break of Studies</label>
                  <select name="break" class="form-control">
                    <option value="select">Years</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
				</div>
				<div class="row form-group">
				<div class="col-lg-26 col-md-26 form-group">				
                  <label for="inputFirstName">Other Details</label>
                  <textarea rows="3" name="odetails" class="form-control" id="inputFirstName" placeholder="Details"></textarea>
				  </div>
</div>				  
          <br>
              <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">submit</button>
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
