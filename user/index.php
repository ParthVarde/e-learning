<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

		}
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Welcome <?php echo $username;?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Online Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="courses.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Courses</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="que.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Ask Question to Expert</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="manage.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Manage Profile</h3>
							
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>
</html>