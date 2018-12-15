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
				<h1>Write HTML Using Notepad or TextEdit</h1><br>
				<p>Web pages can be created and modified by using professional HTML editors.<p>
				<p>However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).</p>
				<p>We believe using a simple text editor is a good way to learn HTML.</p>
				<p>Follow the four steps below to create your first web page with Notepad or TextEdit.</p>
				<hr>
				<h1>Step 1: Open Notepad (PC)</h1>
				<p><b>Windows 8 or later:</b></p>
				<p>Open the<b> Start Screen </b>(the window symbol at the bottom left on your screen). Type<b> Notepad</b>.</p>
				<p><b>Windows 7 or earlier:</b></p>
				<p>Open<b> Start > Programs > Accessories > Notepad</b></p>
				<hr>
				<h1>Step 2: Write Some HTML</h1>
				<p>Write or copy some HTML into Notepad.</p>
<?php 
echo '<pre>';
$str='<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

</body>
</html>';
echo htmlspecialchars($str);
echo '</pre>';
?>
				<hr>
				<h1>Step 3: Save the HTML Page</h1>
				<p>Save the file on your computer. Select<b> File > Save </b>as in the Notepad menu.</p>
				<p>Name the file<b> "index.html" </b>and set the encoding to<b> UTF-8 </b>(which is the preferred encoding for HTML files).</p>
				<hr>
				<h1>Step 4: View the HTML Page in Your Browser</h1>
				<p>Open the saved HTML file in your favorite browser (double click on the file, or right-click - and choose "Open with").</p>
				<hr>
				<form method="post" action="">
					<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is use of <?php $s='<p>'; echo htmlspecialchars($s);?> tag?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">To create Paragraph</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">To create table</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">To create list </label>
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
			echo '<a href="chapter3.php" class="btn">Next>></a>';
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
