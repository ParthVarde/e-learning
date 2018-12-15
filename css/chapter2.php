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
				<h1>Three Ways to Insert CSS</h1>
				<p>There are three ways of inserting a style sheet:</p>
				<ul>
					<li>External style sheet</li>
					<li>Internal style sheet</li>
					<li>Inline style</li>
				</ul>
				<hr>
				<h1>External Style Sheet</h1>
					<p>With an external style sheet, you can change the look of an entire website by changing just one file!</p>
					<p>Each page must include a reference to the external style sheet file inside the <?php $str='<link>'; echo htmlspecialchars($str); ?> element. The <?php $str='<link>'; echo htmlspecialchars($str); ?> element goes inside the <?php $str='<head>'; echo htmlspecialchars($str); ?> section:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1>Internal Style Sheet</h1>
					<p>An internal style sheet may be used if one single page has a unique style.</p>
					<p>Internal styles are defined within the <?php $str='<style>'; echo htmlspecialchars($str); ?> element, inside the <?php $str='<head>'; echo htmlspecialchars($str); ?> section of an HTML page:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<head>
<style>
body {
    background-color: linen;
}

h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>
</head>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>	
					<h1>Inline Styles</h1>
					<p>An inline style may be used to apply a unique style for a single element.</p>
					<p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
					<p>The example below shows how to change the color and the left margin of a <?php $str='<h1>'; echo htmlspecialchars($str); ?> element:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<h1 style="color:blue;margin-left:30px;">This is a heading.</h1>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1)which one of following is not correct way insert CSS ?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Inline</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">External</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">In body</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
						echo '<a href="chapter3.php" class="btn">Next>></a>';

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