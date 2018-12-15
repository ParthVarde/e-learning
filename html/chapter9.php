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
<h1>HTML Lists</h1>
<hr>
<h1>Unordered HTML List</h1>
<p>An unordered list starts with the <?php $str='<ul>'; echo htmlspecialchars($str); ?> tag. Each list item starts with the <?php $str='<li>'; echo htmlspecialchars($str); ?> tag.</p>
<p>The list items will be marked with bullets (small black circles) by default:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>Unordered HTML List - Choose List Item Marker</h1>
<p>The CSS list-style-type property is used to define the style of the list item marker:</p>
<table class="table" border=1>
	<tr>
		<th><b>Value</b></th>
		<th><b>Description</b></th>
	</tr>
	<tr>
		<td>disc</td>
		<td>Sets the list item marker to a bullet (default)</td>
	</tr>
	<tr>
		<td>circle</td>
		<td>Sets the list item marker to a circle</td>
	</tr>
	<tr>
		<td>square</td>
		<td>Sets the list item marker to a square</td>
	</tr>
	<tr>
		<td>none</td>
		<td>The list items will not be marked</td>
	</tr>
</table>
<h4><b>Example - Disc</b></h4>
<?php
echo '<pre>';
$str='<ul style="list-style-type:disc">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Circle</b></h4>
<?php
echo '<pre>';
$str='<ul style="list-style-type:circle">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Square</b></h4>
<?php
echo '<pre>';
$str='<ul style="list-style-type:square">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - None</b></h4>
<?php
echo '<pre>';
$str='<ul style="list-style-type:none">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Ordered HTML List</h1>
<p>An ordered list starts with the <?php $str='<ol>'; echo htmlspecialchars($str); ?> tag. Each list item starts with the <?php $str='<li>'; echo htmlspecialchars($str); ?> tag.</p>
<p>The list items will be marked with numbers by default:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>Ordered HTML List - The Type Attribute</h1>
<p>The<b> type </b>attribute of the <?php $str='<ol>'; echo htmlspecialchars($str); ?> tag, defines the type of the list item marker:</p>
<table class="table" border=1>
	<tr>
		<th><b>type</b></th>
		<th><b>Description</b></th>
	</tr>
	<tr>
		<td>type="1"</td>
		<td>The list items will be numbered with numbers (default)</td>
	</tr>
	<tr>
		<td>type="A"</td>
		<td>The list items will be numbered with uppercase letters</td>
	</tr>
	<tr>
		<td>type="a"</td>
		<td>The list items will be numbered with lowercase letters</td>
	</tr>
	<tr>
		<td>type="I"</td>
		<td>The list items will be numbered with uppercase roman numbers</td>
	</tr>
	<tr>
		<td>type="i"</td>
		<td>The list items will be numbered with lowercase roman numbers</td>
	</tr>
</table>
<h4><b>Example - Numbers</b></h4>
<?php
echo '<pre>';
$str='<ol type="1">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Uppercase Letters</b></h4>
<?php
echo '<pre>';
$str='<ol type="A">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Lowercase Letters</b></h4>
<?php
echo '<pre>';
$str='<ol type="a">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Uppercase Roman Numbers</b></h4>
<?php
echo '<pre>';
$str='<ol type="I">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h4><b>Example - Lowercase Roman Numbers</b></h4>
<?php
echo '<pre>';
$str='<ol type="i">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML Description Lists</h1>
<p>HTML also supports description lists.</p>
<p>A description list is a list of terms, with a description of each term.</p>
<p>The <?php $str='<dl>'; echo htmlspecialchars($str); ?> tag defines the description list, the <?php $str='<dt>'; echo htmlspecialchars($str); ?> tag defines the term (name), and the <?php $str='<dd>'; echo htmlspecialchars($str); ?> tag describes each term:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1)which tag is used for unordered list? </label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<src>'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<ul>'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<ol>'; echo htmlspecialchars($s); ?></label>
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
			echo '<a href="chapter10.php" class="btn">Next>></a>';
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