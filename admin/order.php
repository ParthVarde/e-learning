<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
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
		else{ echo 'session not started';}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Orders</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<form method="POST" action="">
				<table class="table table-bordered">
					<tr>
						<th>Order No</th>
						<th>Book Name</th>
						<th>Full Name</th>
						<th>Address</th>
						<th>City</th>
						<th>Pin Code</th>
						<th>State</th>
						<th>Email ID</th>
						<th>Mobile No</th>
						<th>#</th>
					</tr>
					<?php
						$query = "SELECT * FROM purchase";
						$result = mysqli_query($strconn,$query);
						while($row = mysqli_fetch_array($result))
						{
							$bookname = $row[0];
							$orderno = $row[1];
							$name = $row[2];
							$address = $row[3];
							$city = $row[4];
							$pincode = $row[5];
							$state = $row[6];
							$email = $row[7];
							$mobile = $row[8];
							echo '<tr>';
							echo '<td>'.$orderno.'</td>';
							echo '<td>'.$bookname.'</td>';
							echo '<td>'.$name.'</td>';
							echo '<td>'.$address.'</td>';
							echo '<td>'.$city.'</td>';
							echo '<td>'.$pincode.'</td>';
							echo '<td>'.$state.'</td>';
							echo '<td>'.$email.'</td>';
							echo '<td>'.$mobile.'</td>';
					
							echo "<td><a class='btn' href=\"deleteorder.php?id=".$row[1]."\">Delete order</a></td>";
							echo '</tr>';
						}
					?>
				</table>
				</form>
			</div>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>