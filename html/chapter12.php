
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
<h1>The <?php $str='<form>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The HTML <?php $str='<form>'; echo htmlspecialchars($str); ?> element defines a form that is used to collect user input:</p>
<?php
echo '<pre>';
$str='<form>
.
form elements
.
</form>';
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>An HTML form contains form elements.</p>
<p>Form elements are different types of input elements, like text fields, checkboxes, radio buttons, submit buttons, and more.</p>
<hr>

<h1>The <?php $str='<input>'; echo htmlspecialchars($str); ?> Element</h1>
<p>The <?php $str='<input>'; echo htmlspecialchars($str); ?> element is the most important form element.</p>
<p>The <?php $str='<input>'; echo htmlspecialchars($str); ?> element can be displayed in several ways, depending on the<b> type </b>attribute.</p>
<p>Here are some examples:</p>
<table class="table" border=1>
	<tr>
		<th><b>Type</b></th>
		<th><b>Description</b></th>
	</tr>
	<tr>
		<td><?php $str='<input type="text">'; echo htmlspecialchars($str); ?></td>
		<td>Defines a one-line text input field</td>
	</tr>
	<tr>
		<td><?php $str='<input type="radio">'; echo htmlspecialchars($str); ?></td>
		<td>Defines a radio button (for selecting one of many choices)</td>
	</tr>
	<tr>
		<td><?php $str='<input type="submit">'; echo htmlspecialchars($str); ?></td>
		<td>Defines a submit button (for submitting the form)</td>
	</tr>
</table>
<hr>

<h1>Text Input</h1>
<p><?php $str='<input type="text">'; echo htmlspecialchars($str); ?> defines a one-line input field for text input:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Radio Button Input</h1>
<p><?php $str='<input type="radio">'; echo htmlspecialchars($str); ?> defines a radio button.</p>
<p>Radio buttons let a user select ONE of a limited number of choices:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>The Submit Button</h1>
<p><?php $str='<input type="submit">'; echo htmlspecialchars($str); ?> defines a button for submitting the form data to a form-handler.</p>
<p>The form-handler is typically a server page with a script for processing input data.</p>
<p>The form-handler is specified in the form's<b> action </b>attribute:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>The Action Attribute</h1>
<p>The<b> action </b>attribute defines the action to be performed when the form is submitted.</p>
<p>Normally, the form data is sent to a web page on the server when the user clicks on the submit button.</p>
<p>In the example above, the form data is sent to a page on the server called "action_page.php". This page contains a server-side script that handles the form data:</p>
<?php
echo '<pre>';
$str='<form action="action_page.php">';
echo htmlspecialchars($str);
echo '</pre>';
?>
<hr>

<h1>The Method Attribute</h1>
<p>The<b> method </b>attribute specifies the HTTP method (GET or POST) to be used when submitting the form data:</p>
<?php
echo '<pre>';
$str='<form action="action_page.php" method="get">';
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>or</p>
<?php
echo '<pre>';
$str='<form action="action_page.php" method="post">';
echo htmlspecialchars($str);
echo '</pre>';
?>
<hr>

<h1>The Name Attribute</h1>
<p>Each input field must have a<b> name </b>attribute to be submitted.</p>
<p>If the name attribute is omitted, the data of that input field will not be sent at all.</p>
<p>This example will only submit the "Last name" input field:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  First name:<br>
  <input type="text" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Grouping Form Data with <?php $str='<fieldset>'; echo htmlspecialchars($str); ?></h1>
<p>The <?php $str='<fieldset>'; echo htmlspecialchars($str); ?> element is used to group related data in a form.</p>
<p>The <?php $str='<legend>'; echo htmlspecialchars($str); ?> element defines a caption for the <?php $str='<fieldset>'; echo htmlspecialchars($str); ?> element.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" value="Mickey"><br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) Which one of following is correct?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<input type="text">'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<input type="id">'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<input type="class">'; echo htmlspecialchars($s); ?></label>
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
			echo '<a href="chapter13.php" class="btn">Next>></a>';
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