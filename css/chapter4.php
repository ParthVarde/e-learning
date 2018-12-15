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
				<h1>Border Style</h1>
				<p>The border-style property specifies what kind of border to display.</p>
				<p>The following values are allowed:</p>
				<ul>
						<li>dotted - Defines a dotted border</li>
						<li>dashed - Defines a dashed border</li>
						<li>solid - Defines a solid border</li>
						<li>double - Defines a double border</li>
						<li>groove - Defines a 3D grooved border. The effect depends on the border-color value</li>
						<li>ridge - Defines a 3D ridged border. The effect depends on the border-color value</li>
						<li>inset - Defines a 3D inset border. The effect depends on the border-color value</li>
						<li>outset - Defines a 3D outset border. The effect depends on the border-color value</li>
						<li>none - Defines no border</li>
						<li>hidden - Defines a hidden border</li>
				</ul>
				<p>The border-style property can have from one to four values (for the top border, right border, bottom border, and the left border).</p>
				<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p.dotted {border-style: dotted;}
p.dashed {border-style: dashed;}
p.solid {border-style: solid;}
p.double {border-style: double;}
p.groove {border-style: groove;}
p.ridge {border-style: ridge;}
p.inset {border-style: inset;}
p.outset {border-style: outset;}
p.none {border-style: none;}
p.hidden {border-style: hidden;}
p.mix {border-style: dotted dashed solid double;}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>Border Width</h1>
			<p>The border-width property specifies the width of the four borders.</p>
			<p>The width can be set as a specific size (in px, pt, cm, em, etc) or by using one of the three pre-defined values: thin, medium, or thick.</p>
			<p>The border-width property can have from one to four values (for the top border, right border, bottom border, and the left border).</p>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p.one {
    border-style: solid;
    border-width: 5px;
}

p.two {
    border-style: solid;
    border-width: medium;
}

p.three {
    border-style: solid;
    border-width: 2px 10px 4px 20px;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
			<h1>Border Color</h1>
			<p>The border-color property is used to set the color of the four borders.</p>
			<p>The color can be set by:</p>
			<ul>
						<li>name - specify a color name, like "red"</li>
						<li>Hex - specify a hex value, like "#ff0000"</li>
						<li>RGB - specify a RGB value, like "rgb(255,0,0)"</li>
						<li>transparent</li>
			</ul>
			<p>The border-color property can have from one to four values (for the top border, right border, bottom border, and the left border). </p>
			<p>If border-color is not set, it inherits the color of the element.</p>
			<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p.one {
    border-style: solid;
    border-color: red;
}

p.two {
    border-style: solid;
    border-color: green;
}

p.three {
    border-style: solid;
    border-color: red green blue yellow;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form action="" method="post">
	<h1>Answer the following question correct answer will lead you to next chapter.</h1>
			<h1>1. Which property is used to set border width?</h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">Border-style</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">Border-width</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">Border-height</label>
</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
						echo '<a href="chapter5.php" class="btn">Next>></a>';

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