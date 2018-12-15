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
					<h1>What is HTML?</h1><br>
					<p>HTML is the standard markup language for creating Web pages.<p>
					<ul>
						<li>HTML stands for Hyper Text Markup Language</li>
						<li>HTML describes the structure of Web pages using markup</li>
						<li>HTML elements are the building blocks of HTML pages</li>
						<li>HTML elements are represented by tags</li>
						<li>HTML tags label pieces of content such as "heading", "paragraph", "table", and so on</li>
						<li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
					</ul>
					<hr>
					<h1>A Simple HTML Document</h1>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
					<h1>Example Explained</h1>
					<ul>
						<li>The <?php $str='<!DOCTYPE html>'; echo htmlspecialchars($str); ?> declaration defines this document to be HTML5</li>
						<li>The <?php $str='<html>'; echo htmlspecialchars($str); ?> element is the root element of an HTML page</li>
						<li>The <?php $str='<head>'; echo htmlspecialchars($str); ?>  element contains meta information about the document</li>
						<li>The <?php $str='<title>'; echo htmlspecialchars($str); ?>  element specifies a title for the document</li>
						<li>The <?php $str='<body>'; echo htmlspecialchars($str); ?>  element contains the visible page content</li>
						<li>The <?php $str='<h1>'; echo htmlspecialchars($str); ?>  element defines a large heading</li>
						<li>The <?php $str='<p>'; echo htmlspecialchars($str); ?>  element defines a paragraph</li>
					</ul>
					<hr>
					<h1>HTML Tags</h1>
					<p>HTML tags are element names surrounded by angle brackets:</p>
					<?php 
					echo '<pre>';
					$str = '<tagname>content goes here...</tagname>';
					echo htmlspecialchars($str);
					echo '</pre>';
					?>
					<ul>
						<li>HTML tags normally come in pairs like <?php $str='<p>'; echo htmlspecialchars($str); ?> and <?php $str='</p>'; echo htmlspecialchars($str); ?></li>
						<li>The first tag in a pair is the start tag, the second tag is the end tag</li>
						<li>The end tag is written like the start tag, but with a forward slash inserted before the tag name</li>
					</ul>
					<hr>
					<h1>HTML Page Structure</h1>
					<p>Below is a visualization of an HTML page structure:</p>
					<img src="images/html.jpg" >
					<hr>
					<form method="post" action="">
					<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What does HTML stands for?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="Hyper text markup Lnaguage">Hypertext Markup Language</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="Hyperlink text markup language">Hyperlink text Markup language</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="hyper tool markup language">Hypertool Markup Language</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="Hyper text markup Lnaguage")
		{
			//echo 'true';
			echo '<a href="chapter2.php" class="btn">Next>></a>';
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
