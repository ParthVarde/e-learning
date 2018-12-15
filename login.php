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
	?>
	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </header>
	<br>
	<form action="" method="post">
		<table border=0 align="center">
			<tr>
				<td><label>Enter your User Name:</label></td>
				<td><input type="text" class="form-control" name="id" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter your Password:</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnsubmit" class="btn btn-block">Submit</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="btnforget" class="btn btn-block">Forgot Password?</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href="reg.php" class="btn btn-block">Create Account?</a></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><a href="expertlogin.php" class="btn btn-block">Login As Expert</a></td>
			</tr>
		</table>
	</form>
	
	<?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"]; 
            $password = $_POST["pass"]; 
			$query = "SELECT * FROM user_info WHERE UserName='$name' and Password='$password'";
			$result = mysqli_query($strconn,$query);
			$count = mysqli_num_rows($result);
			if($count==1)
			{
				session_start();
				//session_id("my_session");
				$_SESSION["username"]=$_POST['id'];
				//header("location:user/index.php");
				echo("<script>location.href = 'user/index.php';</script>");
			}
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Username or password is incorrect..Try again</div>";
			}
		}
	}?>
	<?php
	/*if(!empty($_POST['id']))
	{
		if(isset($_POST['btnforget']))
		{
			$username = $_POST['id'];
			$query1 = "SELECT * FROM user_info WHERE UserName='$username'";
			$result1 = mysqli_query($strconn,$query1);
			$count = mysqli_num_rows($result1);
			/*if($count==1)
			{
				echo 'hello';
				//echo("<script>location.href ='forget.php';</script>");
			}
			else
			{
				echo 'failed';
			}
			while($row = mysqli_fetch_array($result1))
			{
				$email = $row[0];
				$pass = $row[1];
			}
		}
		$message = "Use This Password To Login in :".$pass;
		$subject = "Your Recovered Password";
		$headers = "From : parthvarde50@gmail.com";
		if($email)
		{
			echo "<div class='alert alert-success' role='alert'>Password successfully sent to your registered Email ID</div>";
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Some error occurred. Please try again later!</div>";
		}
	}
	*/
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>