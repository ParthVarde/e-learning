<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
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
					<h1>Answer Doubts</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	
	<?php
			$query = "SELECT que.QueID,que.UserID,que.Description FROM que LEFT JOIN ans ON ans.QueID=que.QueID WHERE ans.QueID IS NULL LIMIT 1";
			$result1 = mysqli_query($strconn,$query);
			while($row = mysqli_fetch_array($result1))
			{
				$qid = $row[0];
				$id = $row[1];
				$que= $row[2];?>
	<form action="" method="POST">
	<div class="container">
				<div class="row">
					<div class="col-md-6">
					<label>Que : <?php echo $que; ?>
			</label>
					<textarea rows="10" cols="100" class="form-control" 
			placeholder="Your Answer" name="message" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			<br>
			<button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button><br /><br /><br />
			<a href="" class="btn">Next>></a>
			</form>
	<?php 
	}
	 
	?>
	<?php
	if(!empty($_POST['message']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$query = "SELECT Expert_id FROM expert_info WHERE UserName='$username'";
			$result1 = mysqli_query($strconn,$query);
			while($row = mysqli_fetch_array($result1))
			{
				$eid = $row[0];
				//echo $eid;
			}
			$answer=$_POST['message'];
			$query = "INSERT INTO ans(ExpertID,UserID,QueID,Question,Answer) VALUES($eid,$id,$qid,'$que','$answer')";
			$result = mysqli_query($strconn,$query);
			if($result)
			{

              echo "<div class='alert alert-success' role='alert'>Answer sent to user</div>";
		    }
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Answer already sent to user</div>";

			}
		}
	}
		
	?>
	</div>
	</div>
	</div>
	<br>
	<?php
		include "footer.php";
	?>
</body>
</html>