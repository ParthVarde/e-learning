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
<h1>The <?php $str='<select>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<select>'; echo htmlspecialchars($str); ?> element defines a<b> drop-down list</b>:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>The <?php $str='<textarea>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<textarea>'; echo htmlspecialchars($str); ?> element defines a multi-line input field (a text area):</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>The <?php $str='<button>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<button>'; echo htmlspecialchars($str); ?> element defines a clickable<b> button</b>:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<button type='button' onclick='alert('Hello World!')'>Click Me!</button>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML5 <?php $str='<datalist>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<datalist>'; echo htmlspecialchars($str); ?> element specifies a list of pre-defined options for an <?php $str='<input>'; echo htmlspecialchars($str); ?> element.</p>
<p>Users will see a drop-down list of the pre-defined options as they input data.</p>
<p>The list attribute of the <?php $str='<input>'; echo htmlspecialchars($str); ?> element, must refer to the id attribute of the <?php $str='<datalist>'; echo htmlspecialchars($str); ?> element.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  <input list="browsers">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist> 
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML5 <?php $str='<keygen>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The purpose of the <?php $str='<keygen>'; echo htmlspecialchars($str); ?> element is to provide a secure way to authenticate users.</p>
<p>The <?php $str='<keygen>'; echo htmlspecialchars($str); ?> element specifies a key-pair generator field in a form.</p>
<p>When the form is submitted, two keys are generated, one private and one public.</p>
<p>The private key is stored locally, and the public key is sent to the server.</p>
<p>The public key could be used to generate a client certificate to authenticate the user in the future.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  Username: <input type="text" name="user">
  Encryption: <keygen name="security">
  <input type="submit">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) What is does<?php $s='<textarea>'; echo htmlspecialchars($s);?>defines in HTML?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">it defines a multi-line input field</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">it defines a single-line input field</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">it defines a new-line input field</label>
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
			echo '<a href="chapter14.php" class="btn">Next>></a>';
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

