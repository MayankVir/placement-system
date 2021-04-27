<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <!-- <link rel="shortcut icon" href="favicon.png" type="image/icon"> -->
        <link rel="icon" href="./images/logo.jpg" type="image/icon">
      <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Placement- Reset Password</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Reset Password</h1>
	        </header>
	        <form action="rs.php" class="templatemo-login-form" method="POST">
			<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="USN" class="form-control" placeholder="Username" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<select type="text" name="Question" class="form-control" placeholder="Security Question" > 
								<option value="What is your nickname?">What is your nickname?</option>
					</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Answer" class="form-control" placeholder="Answer" >           
		          	</div>	
	        	</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Send Request</button>
				</div>
	        </form>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Remembered Password? <strong><a href="index.php" class="blue-text">Sign in!</a></strong></p>
		</div>
	</body>
</html>