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
<h1>HTML <?php $str='<q>'; echo htmlspecialchars($str); ?> for Short Quotations</h1>
<p>The HTML <?php $str='<q>'; echo htmlspecialchars($str); ?> element defines a short quotation.</p>
<p>Browsers usually insert quotation marks around the <?php $str='<q>'; echo htmlspecialchars($str); ?> element.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<blockquote>'; echo htmlspecialchars($str); ?> for Quotations</h1>
<p>The HTML <?php $str='<blockquote>'; echo htmlspecialchars($str); ?> element defines a section that is quoted from another source.</p>
<p>Browsers usually indent <?php $str='<blockquote>'; echo htmlspecialchars($str); ?> elements.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p>Here is a quote from WWF's website:</p>
<blockquote cite='http://www.worldwildlife.org/who/index.html'>
For 50 years, WWF has been protecting the future of nature.
The world's leading conservation organization,
WWF works in 100 countries and is supported by
1.2 million members in the United States and
close to 5 million globally.
</blockquote>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<abbr>'; echo htmlspecialchars($str); ?> for Abbreviations</h1>
<p>The HTML <?php $str='<abbr>'; echo htmlspecialchars($str); ?> element defines an abbreviation or an acronym.</p>
<p>Marking abbreviations can give useful information to browsers, translation systems and search-engines.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p>The <abbr title='World Health Organization'>WHO</abbr> was founded in 1948.</p>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<address>'; echo htmlspecialchars($str); ?> for Contact Information</h1>
<p>The HTML <?php $str='<address>'; echo htmlspecialchars($str); ?> element defines contact information (author/owner) of a document or an article.</p>
<p>The <?php $str='<address>'; echo htmlspecialchars($str); ?> element is usually displayed in italic. Most browsers will add a line break before and after the element.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<address>
Written by John Doe.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Disneyland<br>
USA
</address>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<cite>'; echo htmlspecialchars($str); ?>  for Work Title</h1>
<p>The HTML <?php $str='<cite>'; echo htmlspecialchars($str); ?> element defines the title of a work.</p>
<p>Browsers usually display <?php $str='<cite>'; echo htmlspecialchars($str); ?> elements in italic.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML <?php $str='<bdo>'; echo htmlspecialchars($str); ?>  Bi-Directional Override</h1>
<p>The HTML <?php $str='<bdo>'; echo htmlspecialchars($str); ?> element defines bi-directional override.</p>
<p>The <?php $str='<bdo>'; echo htmlspecialchars($str); ?> element is used to override the current text direction:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<bdo dir="rtl">This text will be written from right to left</bdo>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of <?php $s='<q>'; echo htmlspecialchars($s);?> ?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">To define short quotaion</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">To define abbreviation</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">To define contact information</label>
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
			echo '<a href="chapter8.php" class="btn">Next>></a>';
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