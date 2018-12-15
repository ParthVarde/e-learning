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
				<h1>CSS Padding</h1>
				<p>The CSS padding properties are used to generate space around content.</p>
				<p>The padding clears an area around the content (inside the border) of an element.</p>
				<p>With CSS, you have full control over the padding. There are CSS properties for setting the padding for each side of an element (top, right, bottom, and left).</p>
<hr>
			<h1>Padding - Individual Sides</h1>
			<p>CSS has properties for specifying the padding for each side of an element:</p>
			<ul>
						<li>padding-top</li>
						<li>padding-right</li>
						<li>padding-bottom</li>
						<li>padding-left</li>
			</ul>
			<p>All the padding properties can have the following values:</p>
			<ul>
						<li>length - specifies a padding in px, pt, cm, etc.</li>
						<li>% - specifies a padding in % of the width of the containing element</li>
						<li>inherit - specifies that the padding should be inherited from the parent element</li>
			</ul>
			<p>The following example sets different padding for all four sides of a <?php $str='<p>'; echo htmlspecialchars($str); ?> element:</p>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>Padding - Shorthand Property</h1>
			<p>To shorten the code, it is possible to specify all the padding properties in one property.</p>
			<p>The padding property is a shorthand property for the following individual padding properties:</p>
			<ul>
						<li>padding-top</li>
						<li>padding-right</li>
						<li>padding-bottom</li>
						<li>padding-left</li>
			</ul>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    padding: 50px 30px 50px 80px;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>All CSS Padding Properties</h1>
			<img src="images/Padding.png"></img>
<hr>
<form action="" method="post">
	<h1>Answer the following question correct answer will lead you to final css test.</h1>
			<h1>1. Which one of following is not padding property?</h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">padding-bottom</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">padding-left</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">padding-center</label>
</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
						echo '<a href="../cssexamination" class="btn">Start Test</a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>

			<br> 
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