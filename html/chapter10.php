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
<h1>The <?php $str='<div>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<div>'; echo htmlspecialchars($str); ?> element is often used as a container for other HTML elements.</p>
<p>The <?php $str='<div>'; echo htmlspecialchars($str); ?> element has no required attributes, but both style and class are common.</p>
<p>When used together with CSS, the <?php $str='<div>'; echo htmlspecialchars($str); ?> element can be used to style blocks of content:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<div style="background-color:black;color:white;padding:20px;">
  <h2>London</h2>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
</div>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>The <?php $str='<span>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<span>'; echo htmlspecialchars($str); ?> element is often used as a container for some text.</p>
<p>The <?php $str='<span>'; echo htmlspecialchars($str); ?> element has no required attributes, but both style and class are common.</p>
<p>When used together with CSS, the <?php $str='<span>'; echo htmlspecialchars($str); ?> element can be used to style parts of the text:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<h1>My <span style="color:red">Important</span> Heading</h1>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of<?php $s='<div>'; echo htmlspecialchars($s);?>in HTML?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">it is used as a container for other HTML elements.</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">it is used as an id for other HTML elements.</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">it is used as a name for other HTML elements.</label>
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
			echo '<a href="chapter11.php" class="btn">Next>></a>';
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
