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
					<h1>What is CSS?</h1><br>
					<ul>
						<li>CSS stands for Cascading Style Sheets</li>
						<li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
						<li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
						<li>External stylesheets are stored in CSS files</li>
					</ul>
<hr>
					<h1>Why Use CSS?</h1>
					<p>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. </p>
<hr>
					<h1>CSS Syntax</h1>
					<p>A CSS rule-set consists of a selector and a declaration block:</p>
					<img src="images/syntax.png"></img>
					<p>The selector points to the HTML element you want to style.</p>
					<p>The declaration block contains one or more declarations separated by semicolons.</p>
					<p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
					<p>A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.</p>
					<p>In the following example all <?php $str='<p>'; echo htmlspecialchars($str); ?> elements will be center-aligned, with a red text color:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    color: red;
    text-align: center;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1>The id Selector</h1>
					<p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
					<p>The id of an element should be unique within a page, so the id selector is used to select one unique element!</p>
					<p>To select an element with a specific id, write a hash (#) character, followed by the id of the element.</p>
					<p>The style rule below will be applied to the HTML element with id="para1":</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '#para1 {
    text-align: center;
    color: red;
}';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1>The class Selector</h1>
					<p>The class selector selects elements with a specific class attribute.</p>
					<p>To select elements with a specific class, write a period (.) character, followed by the name of the class.</p>
					<p>In the example below, all HTML elements with class="center" will be red and center-aligned:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '.center {
    text-align: center;
    color: red;
}';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1>CSS Comments</h1>
					<p>Comments are used to explain the code, and may help when you edit the source code at a later date.</p>
					<p>Comments are ignored by browsers.</p>
					<p>A CSS comment starts with /* and ends with */. Comments can also span multiple lines:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    color: red;
    /* This is a single-line comment */
    text-align: center;
}

/* This is
a multi-line
comment */';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1)what does CSS stands for? </label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Cascanding style sheet</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">Creative style sheet</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">computer style sheet</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="chapter2.php" class="btn">Next>></a>';

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
