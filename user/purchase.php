<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
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
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Purchase</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
	<form method="POST" action="">
		<table border=0 align="center">
			<tr>
				<td><label>Select Book:</label></td>
				<td><select class="form-control" id="conditions" name="conditions">
					<option value="HTML Complete Reference" selected>HTML Complete Reference (Rs. 1000)</option>
					<option value="Html edition 2">Html edition 2 (Rs. 1500)</option>
				</select></td>
			</tr>
			<tr>
				<td><label>Full Name:</label></td>
				<td><input type="text" class="form-control" name="full" placeholder="Full Name"></td>
			</tr>
			<tr>
				<td><label>Address:</label></td>
				<td>
					<textarea rows="7" cols="100" class="form-control" 
					placeholder="Address" name="address" required
						data-validation-required-message="Please enter your message" minlength="5" 
						data-validation-minlength-message="Min 5 characters" 
						maxlength="999" style="resize:none;margin-top:10px">
					</textarea>
				</td>
			</tr>
			<tr>
				<td><label>City:</label></td>
				<td><input type="text" class="form-control" name="city" placeholder="City"></td>
			</tr>
			<tr>
				<td><label>Pin Code:</label></td>
				<td><input type="text" class="form-control" name="pin" placeholder="Pin Code"></td>
			</tr>
			<tr>
				<td><label>State:</label></td>
				<td><input type="text" class="form-control" name="state" placeholder="State"></td>
			</tr>
			<tr>
				<td><label>Email Address:</label></td>
				<td><input type="email" class="form-control" name="email" placeholder="Email Address"></td>
			</tr>
			<tr>
				<td><label>Mobile No.:</label></td>
				<td><input type="mobile" class="form-control" name="mobile" placeholder="Mobile Number"></td>
			</tr>
		</table>
		<br>
		<button name="submit" class="btn btn-block">Buy Now>></button>
	</form>
	</div>
	</div>
	</div>
	<?php
		if(isset($_POST['submit']))
		{
			$bookname = $_POST['conditions'];
			$fullname = $_POST['full'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$pin = $_POST['pin'];
			$state = $_POST['state'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			//echo $bookname,$fullname,$address,$city,$pin,$state,$email,$mobile;
			$query = "INSERT INTO purchase(Book,Full,Addr,City,PinCode,State,Email,Mobile) VALUES('$bookname','$fullname','$address','$city',$pin,'$state','$email',$mobile)";
			//echo $query;
			$result = mysqli_query($strconn,$query);
			if($result)
			{
				echo "<div class='alert alert-success' role='alert'>Item Purchased</div>";
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Something went wrong.Please try again later !</div>";
			}
		}
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>