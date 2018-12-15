<head>
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

<?php
$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		  
session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
		 $name="SELECT FirstName,LastName FROM user_info WHERE UserName='$username'";
			$result = mysqli_query($strconn,$name);
			while($row=mysqli_fetch_array($result))
			{
				$fname=$row['FirstName'];
				$lname=$row['LastName'];
			}
	?>
	
<style>
.color{
	color: 336699;
}
</head>
</style>
<body>
<div style="width:800px; height:700px; padding:20px; text-align:center; border:
10px solid #787878; font-family:fantasy; border-color: 336699">
<div style="width:750px; height:650px; padding:20px; text-align:center; border:
5px solid #787878; border-color: 006666; background-color:cceeff ">
<span  class="color"style="font-size:60px;font-family:Edwardian Script ITC">Certificate of
Completion</span>
<br><br>
<span class="color"style="font-size:60px ;font-family:Edwardian Script ITC"><i>This is to certify that</i></span>
<br><br>
<span class="color" style="font-size:60px"><b><?php echo $fname." ".$lname;?></b></span><br/>
<br/>
<span class="color"style="font-size:60px;font-family:Edwardian Script ITC"><b><i>has completed the html exam</i></b></span> <br/>
<br/>
<!--<span class="color" style="font-size:30px">$course.getName()</span> <br/><br/>-->
<!--<span  class="color"style="font-size:60px; font-family:Edwardian Script ITC">with score of  <b></b>-->
</span> <br/><br/><br/><br/>
<img src="../assets/images/logo.png" height="100px" width="150px" align="left">
<!--<span  class="color"style="font-size:25px"><i>dated</i></span><br>-->
<!--#set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM
dd, yyyy"))-->
<!--<span class="color" style="font-size:30px">$dt</span>-->
</div>
</div>
<br><br>
</body>
<form><input type="button"  class="btn btn-primary" value=" Print certificate"
onclick="window.print(body);return false;" />
<a href="../user/index.php" class="btn">Home</a>
</form>