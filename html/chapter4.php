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
<h1>HTML Attributes</h1>
<p>Attributes provide additional information about HTML elements.</p>
<ul>
	<li>All HTML elements can have<b> attributes</b></li>
	<li>Attributes provide<b> additional information </b>about an element</li>
	<li>Attributes are always specified in the<b> start tag</b></li>
	<li>Attributes usually come in name/value pairs like:<b> name="value"</b></li>
</ul>
<hr>
<h1>The lang Attribute</h1>
<p>The language of the document can be declared in the <?php $str='<html>'; echo htmlspecialchars($str); ?> tag.</p>
<p>The language is declared with the<b> lang </b>attribute.</p>
<p>Declaring a language is important for accessibility applications (screen readers) and search engines:</p>
<?php
echo '<pre>';
$str='<!DOCTYPE html>
<html lang="en-US">
<body>

...

</body>
</html>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The first two letters specify the language (en). If there is a dialect, use two more letters (US).</p>
<hr>
<h1>The title Attribute</h1>
<p>Here, a<b> title </b>attribute is added to the <?php $str='<p>'; echo htmlspecialchars($str); ?> element. The value of the title attribute will be displayed as a tooltip when you mouse over the paragraph:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p title='I'>
This is a paragraph.
</p>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>The href Attribute</h1>
<p>HTML links are defined with the <?php $str='<a>'; echo htmlspecialchars($str); ?> tag. The link address is specified in the<b> href </b>attribute:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<a href="http://www.w3schools.com">This is a link</a>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Size Attributes</h1>
<p>HTML images are defined with the <?php $str='<img>'; echo htmlspecialchars($str); ?> tag.</p>
<p>The filename of the source (src), and the size of the image (width and height) are all provided as attributes:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<img src="w3schools.jpg" width="104" height="142">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The image size is specified in pixels: width="104" means 104 screen pixels wide.</p>
<hr>
<h1>The alt Attribute</h1>
<p>The<b> alt </b>attribute specifies an alternative text to be used, when an image cannot be displayed.</p>
<p>The value of the attribute can be read by screen readers. This way, someone "listening" to the webpage, e.g. a blind person, can "hear" the element.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>HTML Attributes</h1>
<p>Below is an alphabetical list of some attributes often used in HTML:</p>
<table border=1 class="table">
	<tr>
		<th><b>Attribute</b></th>
		<th><b>Description</b></th>
	</tr>
	<tr>
		<td>alt</td>
		<td>Specifies an alternative text for an image, when the image cannot be displayed</td>
	</tr>
	<tr>
		<td>disabled</td>
		<td>Specifies that an input element should be disabled</td>
	</tr>
	<tr>
		<td>href</td>
		<td>Specifies the URL (web address) for a link</td>
	</tr>
	<tr>
		<td>id</td>
		<td>Specifies a unique id for an element</td>
	</tr>
	<tr>
		<td>src</td>
		<td>Specifies the URL (web address) for an image</td>
	</tr>
	<tr>
		<td>style</td>
		<td>Specifies an inline CSS style for an element</td>
	</tr>
	<tr>
		<td>title</td>
		<td>Specifies extra information about an element (displayed as a tool tip)</td>
	</tr>
</table>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) Which one of following is correct?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<a href="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<a src="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<a alt="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
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
			echo '<a href="chapter5.php" class="btn">Next>></a>';
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






