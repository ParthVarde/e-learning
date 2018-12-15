<html>
<head>
	<meta charset="utf-8">
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
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>CSS</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
				<h1>CSS Colors</h1>
				<p>Colors in CSS are most often specified by:</p>
				<ul>
						<li>a valid color name - like "red"</li>
						<li>an RGB value - like "rgb(255, 0, 0)"</li>
						<li>a HEX value - like "#ff0000"</li>
				</ul>
<hr>
			<h1>Color Names</h1>
			<p>Colors set by using color names:</p>
			<img src="images/ColorNames.png"></img>
<hr>
			<h1>RGB (Red, Green, Blue)</h1>
			<p>RGB color values can be specified using this formula: rgb(red, green, blue).</p>
			<p>Each parameter (red, green, blue) defines the intensity of the color between 0 and 255.</p>
			<p>For example, rgb(255,0,0) is displayed as red, because red is set to its highest value (255) and the others are set to 0. Experiment by mixing the RGB values below:</p>
			<img src="images/RGB.png"></img>
<hr>
			<h1>Hexadecimal Colors</h1>
			<p>RGB values can also be specified using hexadecimal color values in the form: #RRGGBB, where RR (red), GG (green) and BB (blue) are hexadecimal values between 00 and FF (same as decimal 0-255).</p>
			<p>For example, #FF0000 is displayed as red, because red is set to its highest value (FF) and the others are set to the lowest value (00). Note: HEX values are case-insensitive: "#ff0000" is the same as "FF0000".</p>
			<img src="images/Hexa.png"></img>
<hr><form action="" method="post">
	<h1>Answer the following question correct answer will lead you to next chapter.</h1>
			<h1>1. What is the correct HTML for referring to an external style sheet?</h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">Link rel="stylesheet" type="text/css" href="mystyle.css"</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">Style src="mystyle.css"erlink text markup language</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">Stylesheetmystyle.css/stylesheet</label>
</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="chapter4.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>

			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	<?php
		include "footer.php";
	?>
</body>
</html>