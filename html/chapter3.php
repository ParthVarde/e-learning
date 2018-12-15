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
<h1>HTML Headings</h1>
<p>HTML headings are defined with the <?php $str='<h1>'; echo htmlspecialchars($str); ?> to <?php $str='<h6>'; echo htmlspecialchars($str); ?> tags.</p>
<p><?php $str='<h1>'; echo htmlspecialchars($str); ?> defines the most important heading. <?php $str='<h6>'; echo htmlspecialchars($str); ?> defines the least important heading:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<h1>This is heading 1</h1>
<h2>This is heading 2</h2>
<h3>This is heading 3</h3>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Paragraphs</h1>
<p>HTML paragraphs are defined with the <?php $str='<p>'; echo htmlspecialchars($str); ?> tag:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<p>This is a paragraph.</p>
<p>This is another paragraph.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Links</h1>
<p>HTML links are defined with the <?php $str='<a>'; echo htmlspecialchars($str); ?> tag:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<a href="http://www.w3schools.com">This is a link</a>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The link's destination is specified in the<b> href attribute</b>.</p>
<p>Attributes are used to provide additional information about HTML elements.</p>

<!--<hr>
<h1>HTML Images</h1>
<p>HTML images are defined with the <?php $str='<img>'; echo htmlspecialchars($str); ?> tag.</p>
<p>The source file (src), alternative text (alt), width, and height are provided as attributes:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>-->
<hr>
<h1>HTML Links</h1>
<p>HTML elements with no content are called empty elements.</p>
<p><?php $str='<br>'; echo htmlspecialchars($str); ?> is an empty element without a closing tag (the <?php $str='<br>'; echo htmlspecialchars($str); ?> tag defines a line break).</p>
<p>Empty elements can be "closed" in the opening tag like this: <?php $str='<br />'; echo htmlspecialchars($str); ?>.</p>
<p>HTML5 does not require empty elements to be closed. But if you want stricter validation, or if you need to make your document readable by XML parsers, you must close all HTML elements properly.</p>
<hr><form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) Which tag defines most important heading?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<h6>'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<h2>'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<h1>'; echo htmlspecialchars($s); ?></label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
			//echo 'true';
			echo '<a href="chapter4.php" class="btn">Next>></a>';
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

