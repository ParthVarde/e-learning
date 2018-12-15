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
                    <h1>Add Chapter</h1>
                </div>
            </div>
        </div>
    </header>
	<br>
	<?php
		$query = "SELECT Title FROM subject";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Success";
		}
		else
		{
			echo "failed";
		}*/
	?>
	<form method="POST" action="#">
		<table border=0 align="center">
			<tr>
				<td><label>Select Subject :</label></td>
				<td>
				<select name="chapter" class="form-control">
				<?php
				while($row = mysqli_fetch_array($result))
				{
					echo '<option selected>'.$row[0].'</option>';
				}
				?>
				</td>
			</tr>
			<tr>
				<td><label>Enter Chapter Title :</label></td>
				<td><input type="text" class="form-control" name="title" placeholder="Subject Title"></td>
			</tr>
			<tr>
				<td><label>Enter Info :</label></td>
				<td><textarea rows="10" cols="50" class="form-control" 
			placeholder="Infromation" id="message" name="info" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" style="resize:none;margin-top:10px"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block" name="submit">Create Chapter</button></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block">Reset</button></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['submit']))
		{
			$subject = $_POST['chapter'];
			$title = $_POST['title'];
			$info = $_POST['info'];
			echo $subject,$title,$info;
			$query = "INSERT INTO chapter(Subject,Title,Info) VALUES('$subject','$title','$info')";
			$result = mysqli_query($strconn,$query);
			if($result)
			{
				echo "<div class='alert alert-success' role='alert'>Chapter added successfully</div>";
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