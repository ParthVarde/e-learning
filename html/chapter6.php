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
<h1>HTML Text Formatting</h1>
<p>HTML also defines special<b> elements </b>for defining text with a special<b> meaning</b>.</p>
<p>HTML uses elements like <?php $str='<b>'; echo htmlspecialchars($str); ?> and <?php $str='<i>'; echo htmlspecialchars($str); ?> for formatting output, like bold or italic text.</p>
<p>Formatting elements were designed to display special types of text:</p>
<ul>
	<li><?php $str='<b>'; echo htmlspecialchars($str); ?> - Bold text</li>
	<li><?php $str='<strong>'; echo htmlspecialchars($str); ?> - Important text</li>
	<li><?php $str='<i>'; echo htmlspecialchars($str); ?> - Italic text</li>
	<li><?php $str='<em>'; echo htmlspecialchars($str); ?> - Emphasized text</li>
	<li><?php $str='<mark>'; echo htmlspecialchars($str); ?> - Marked text</li>
	<li><?php $str='<small>'; echo htmlspecialchars($str); ?> - Small text</li>
	<li><?php $str='<del>'; echo htmlspecialchars($str); ?> - Deleted text</li>
	<li><?php $str='<ins>'; echo htmlspecialchars($str); ?> - Inserted text</li>
	<li><?php $str='<sub>'; echo htmlspecialchars($str); ?> - Subscript text</li>
	<li><?php $str='<sup>'; echo htmlspecialchars($str); ?> - Superscript text</li>
</ul>
<hr>

<h1>HTML <?php $str='<b>'; echo htmlspecialchars($str); ?> and <?php $str='<strong>'; echo htmlspecialchars($str); ?> Elements</h1>
<p>The HTML <?php $str='<b>'; echo htmlspecialchars($str); ?> element defines bold text, without any extra importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<b>This text is bold</b>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The HTML  <?php $str='<strong>'; echo htmlspecialchars($str); ?> element defines strong text, with added semantic "strong" importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<strong>This text is strong</strong>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<i>'; echo htmlspecialchars($str); ?> and <?php $str='<em>'; echo htmlspecialchars($str); ?> Elements</h1>
<p>The HTML <?php $str='<i>'; echo htmlspecialchars($str); ?> element defines italic text, without any extra importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<i>This text is italic</i>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The HTML <?php $str='<em>'; echo htmlspecialchars($str); ?> element defines emphasized text, with added semantic importance.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<em>This text is emphasized</em>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<small>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<small>'; echo htmlspecialchars($str); ?> element defines smaller text:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<h2>HTML <small>Small</small> Formatting</h2>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<mark>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<mark>'; echo htmlspecialchars($str); ?> element defines marked or highlighted text:</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='<b><h2>HTML <mark>Marked</mark> Formatting</h2></b>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<del>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<del>'; echo htmlspecialchars($str); ?> element defines deleted (removed) text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='<p>My favorite color is <del>blue</del> red.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<ins>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<ins>'; echo htmlspecialchars($str); ?> element defines inserted (added) text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='<p>My favorite <ins>color</ins> is red.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<sub>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<sub>'; echo htmlspecialchars($str); ?> element defines subscripted text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='<p>This is <sub>subscripted</sub> text.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<sup>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<sup>'; echo htmlspecialchars($str); ?> element defines superscripted text.</p>
<h4>Example</h4>
<?php
echo '<pre>';
$str='<p>This is <sup>superscripted</sup> text.</p>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of <?php $s='<b>'; echo htmlspecialchars($s);?> ?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">To make text italic</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">To make text bold</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">To make underline</label>
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
			echo '<a href="chapter7.php" class="btn">Next>></a>';
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












































