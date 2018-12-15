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
				<h1>CSS Margins</h1>
				<p>The CSS margin properties are used to generate space around elements.</p>
				<p>The margin properties set the size of the white space outside the border.</p>
				<p>With CSS, you have full control over the margins. There are CSS properties for setting the margin for each side of an element (top, right, bottom, and left).</p>
<hr>
				<h1>Margin - Individual Sides</h1>
				<p>CSS has properties for specifying the margin for each side of an element:</p>
				<ul>
						<li>margin-top</li>
						<li>margin-right</li>
						<li>margin-bottom</li>
						<li>margin-left</li>
				</ul>
				<p>All the margin properties can have the following values:</p>
				<ul>
						<li>auto - the browser calculates the margin</li>
						<li>length - specifies a margin in px, pt, cm, etc.</li>
						<li>% - specifies a margin in % of the width of the containing element</li>
						<li>inherit - specifies that the margin should be inherited from the parent element</li>
				</ul>
				<p>The following example sets different margins for all four sides of a <?php $str='<p>'; echo htmlspecialchars($str); ?> element:</p>
				<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>The auto Value</h1>
			<p>You can set the margin property to auto to horizontally center the element within its container.</p>
			<p>The element will then take up the specified width, and the remaining space will be split equally between the left and right margins:</p>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'div {
    width: 300px;
    margin: auto;
    border: 1px solid red;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>The inherit Value</h1>
			<p>This example lets the left margin be inherited from the parent element:</p>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'div.container {
    border: 1px solid red;
    margin-left: 100px;
}

p.one {
    margin-left: inherit;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>All CSS Margin Properties</h1>
			<img src="images/Margin.png"></img>
<hr>
<form action="" method="post">
	<h1>Answer the following question correct answer will lead you to next chapter.</h1>
			<h1>1. Which one of following is not margin property?</h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">margin</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">margin-left</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">margin-center</label>
</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
						echo '<a href="chapter6.php" class="btn">Next>></a>';

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