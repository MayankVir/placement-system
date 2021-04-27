<?php
  session_start();
  if($_SESSION["username"]){
  }
   else {
	   header("location: ../SProfile/index.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<!--favicon-->
		<link rel="shortcut icon" href="images/logo.jpg" type="image/icon">
		<!-- <link rel="icon" href="favicon.png" type="image/icon"> -->
		<title>CU | Campus Drives</title>
		<meta name="viewport"
		content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
		<meta name="keywords" content="Tillage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		</script>
		<!-- bootstarp-css -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--// bootstarp-css -->
		<!-- css -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--// css -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600'
		rel='stylesheet' type='text/css'>
		<!--/fonts-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<!-- pop-up -->
		<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
		<!-- <link href="../PProfile/css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="../PProfile/css/templatemo-style.css" rel="stylesheet">
	</head>
	<body>
		<!-- banner -->
		<div class="banner a-banner">
			<!-- container -->
			<div class="container">
				<div class="header">
					<div class="head-logo">
						
					</div>
					<div class="top-nav">
						<span class="menu">
							<img src="images/menu.png" alt="">
						</span>
						<ul class="nav1">
							
							<li class="hvr-sweep-to-bottom">
								<a href="../Homepage/index.php">CU<i>Goto Placement Homepage</i></a>
							</li>
							<li class="hvr-sweep-to-bottom">
								</li>
								<li class="hvr-sweep-to-bottom">
									<a href="about.php">About<i>About Us and our Cheif Architects</i></a>
								</li>
								<li class="hvr-sweep-to-bottom active">
									<a href="products.php">Campus Drives<i>Campus Drives</i></a>
								</li>
								
								<li class="hvr-sweep-to-bottom">
									<a href="mail.php">Mail Us<i>Get in Touch with us Instantly</i></a>
								</li>
								<div class="clearfix"></div>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //container -->
		</div>

		<div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a  class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
					   <td><a  class="white-text templatemo-sort-by">10th</a></td>
<td><a  class="white-text templatemo-sort-by">12th</a></td>
   <td><a  class="white-text templatemo-sort-by">BE</a></td>               
   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
   <td><a  class="white-text templatemo-sort-by">History of Backlogs</a></td>
			      <td><a  class="white-text templatemo-sort-by">Detain years</a></td>
			      <td><a class="white-text templatemo-sort-by">Link </a></td>
				  </thead>
			   </tr>
			   <?php
			
$num_rec_per_page=15;
$conn=mysqli_connect("localhost","root","","placement");
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM addpdrive ORDER BY Date Desc LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($conn,$sql); //run the query
?>
<?php
while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 
 
print "<td>" . $row['CompanyName'] . "</td>"; 
print "<td>" . $row['Date'] . "</td>"; 
print "<td>" . $row['10th'] . "</td>"; 
print "<td>" . $row['12th'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";
print "<td><a name='apply' method='POST' target='blank' href='" . $row['ODetails'] . "'>Apply</a></td>";

print "</tr>"; 

}
?> 

                </tbody>
              </table>  
			  </div>
			  </div>
			  </div>
		
		<!-- //products-top -->
		<!-- products-bottom -->
		<div class="products-bottom">
			<!-- container -->
			<div class="container">
				<h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">Recent Drives</h3>
				<div class="products-bottom-grids">
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/intel.jpg" data-fancybox-group="gallery"><img src="images/intel.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/microsoft.jpg" data-fancybox-group="gallery"><img src="images/microsoft.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/designs.png" data-fancybox-group="gallery"><img src="images/designs.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/ms1.jpg" data-fancybox-group="gallery"><img src="images/ms1.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/bill.jpg" data-fancybox-group="gallery"><img src="images/bill.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="gallery-grids">
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery"><img src="images/6.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/std.jpg" data-fancybox-group="gallery"><img src="images/std.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/og.jpg" data-fancybox-group="gallery"><img src="images/og.jpg" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/infy.png" data-fancybox-group="gallery"><img src="images/infy.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="gallery-grid1 wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<a class="fancybox" href="images/goo.png" data-fancybox-group="gallery"><img src="images/goo.png" class="img-style row6" alt=""><span> </span></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- products-bottom -->
		
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h3>Address</h3>
					<div class="address">
						<p>Chandigarh University, NH - 95 Highway 
							Mohali, Punjab - 140413
						</p>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</body>

</html>