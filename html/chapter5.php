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
<h1>HTML Horizontal Rules</h1>
<p>The <?php $str='<hr>'; echo htmlspecialchars($str); ?> tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.</p>
<p>The <?php $str='<hr>'; echo htmlspecialchars($str); ?> element is used to separate content (or define a change) in an HTML page:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<h1>This is heading 1</h1>
<p>This is some text.</p>
<hr>
<h2>This is heading 2</h2>
<p>This is some other text.</p>
<hr>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Line Breaks</h1>
<p>The HTML <?php $str='<br>'; echo htmlspecialchars($str); ?> element defines a line break.</p>
<p>Use <?php $str='<br>'; echo htmlspecialchars($str); ?> if you want a line break (a new line) without starting a new paragraph:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<p>This is<br>a paragraph<br>with line breaks.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>The HTML <?php $str='<pre>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<pre>'; echo htmlspecialchars($str); ?> element defines preformatted text.</p>
<p>The text inside a <?php $str='<pre>'; echo htmlspecialchars($str); ?> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<pre>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
</pre>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>The HTML Style Attribute</h1>
<p>Setting the style of an HTML element, can be done with the<b> style attribute</b>.</p>
<p>The HTML style attribute has the following<b> syntax:</b></p>
<?php
echo '<pre>';
$str='<tagname style="property:value;">';
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>The property is a CSS property. The value is a CSS value.</p>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of <?php $s='<br>'; echo htmlspecialchars($s);?> ?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">It defines new paragraph</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">It defines break line</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">It defines new div.</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
			//echo 'true';
			echo '<a href="chapter6.php" class="btn">Next>></a>';
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