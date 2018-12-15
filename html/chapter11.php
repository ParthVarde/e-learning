
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
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
<h1>HTML Iframes</h1>
<p>An iframe is used to display a web page within a web page.</p>
<p>An HTML iframe is defined with the <?php $str='<iframe>'; echo htmlspecialchars($str); ?> tag:</p>
<?php
echo '<pre>';
$str='<iframe src="URL"></iframe>';
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>The<b> src </b>attribute specifies the URL (web address) of the inline frame page.</p>
<h1>Iframe - Set Height and Width</h1>
<p>Use the<b> height </b>and<b> width </b>attributes to specify the size of the iframe.</p>
<p>The attribute values are specified in pixels by default, but they can also be in percent (like "80%").</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<iframe src="demo_iframe.htm" height="200" width="300"></iframe>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>Iframe - Target for a Link</h1>
<p>An iframe can be used as the target frame for a link.</p>
<p>The<b> target </b>attribute of the link must refer to the name attribute of the iframe:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<iframe src="demo_iframe.htm" name="iframe_a"></iframe>

<p><a href="http://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of<?php $s='<iframe>'; echo htmlspecialchars($s);?>in HTML?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">An iframe is used to display a web page within a web page.</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">An iframe is used to display a image within a web page.</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">An iframe is used to display a widgets within a web page.</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
			//echo 'true';
			echo '<a href="chapter12.php" class="btn">Next>></a>';
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