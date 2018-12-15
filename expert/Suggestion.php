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
<style>
th, td {
    padding:5px;   
}
</style>
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
		$query = "SELECT Expert_id FROM expert_info WHERE UserName='$username'";
		$result = mysqli_query($strconn,$query);
		while($row = mysqli_fetch_array($result))
		{
			$id = $row[0];
		}
	?>
	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Suggestion</h1>
                </div>
            </div>
        </div>
    </header>
	<div class="container">
				<div class="row">
					<div class="col-md-6">
	<form method="POST" action="">
		<table border=0 align="center">
			<th>
				<h3 class="section-title">Your Suggestion</h3>
			</th>
			<tr>
				<td><input type="text" class="form-control" name="id" placeholder="Full Name"></td>
			</tr>
			<tr>
				<td><input type="email" class="form-control" name="email" placeholder="Email Address"></td>
			</tr>
			<tr>
				<td><input type="text" class="form-control" name="sub" placeholder="Subject"></td>
			</tr>
			<tr>
				<td><textarea rows="10" cols="100" class="form-control" 
			placeholder="Suggestion" name="message" required
			data-validation-required-message="Please enter your suggestion" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none"></textarea></td>
			</tr>
		</table>
		<button type="submit" class="btn btn-primary pull-right" name="btnsubmit">Submit</button>
	</form>
	
	</div>
	</div>
	</div>
	<br>
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['message']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"];
			$email = $_POST["email"];
			$subject = $_POST["sub"];
			$msg = $_POST["message"];
			$query = "INSERT INTO expertsugg(ExpertID,Name,Email_id,Subject,Description) VALUES($id,'$name','$email','$subject','$msg')";
			$result = mysqli_query($strconn,$query);
			if($result)
			{
				echo "<div class='alert alert-success' role='alert'>Suggestion has sent to admin</div>";

			}
			else
			{
                echo "<div class='alert alert-danger' role='alert'>something went wrong try again</div>";
				
			}
		}
	}
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>