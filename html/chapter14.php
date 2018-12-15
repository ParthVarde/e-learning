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
<h1>Input Type Text</h1>
<p><?php $str='<input type="text">'; echo htmlspecialchars($str); ?> defines a one-line text input field:</p>
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

<h1>Input Type Password</h1>
<p><?php $str='<input type="password">'; echo htmlspecialchars($str); ?> defines a password field:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  User name:<br>
  <input type="text" name="username"><br>
  User password:<br>
  <input type="password" name="psw">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Submit</h1>
<p><?php $str='<input type="submit">'; echo htmlspecialchars($str); ?> defines a button for<b> submitting </b>form data to a<b> form-handler</b>.</p>
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

<h1>Input Type Reset</h1>
<p><?php $str='<input type="reset">'; echo htmlspecialchars($str); ?> defines a reset button that will reset all form values to their default values:</b>.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form action="action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
  <input type="reset">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Radio</h1>
<p><?php $str='<input type="radio">'; echo htmlspecialchars($str); ?> defines a radio button.</p>
<p>Radio buttons let a user select ONLY ONE of a limited number of choices:</p>
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

<h1>Input Type checkbox</h1>
<p><?php $str='<input type="checkbox">'; echo htmlspecialchars($str); ?>  defines a checkbox.</p>
<p>Checkboxes let a user select ZERO or MORE options of a limited number of choices.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
  <input type="checkbox" name="vehicle2" value="Car"> I have a car 
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Button</h1>
<p><?php $str='<input type="button">'; echo htmlspecialchars($str); ?>  defines a button:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<input type="button" onclick="alert("Hello World!")" value="Click Me!">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Number</h1>
<p><?php $str='<input type="number">'; echo htmlspecialchars($str); ?>  defines a numeric input field.</p>
<p>You can also set restrictions on what numbers are accepted.</p>
<p>The following example displays a numeric input field, where you can enter a value from 1 to 5:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Date</h1>
<p><?php $str='<input type="date">'; echo htmlspecialchars($str); ?> is used for input fields that should contain a date.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Birthday:
  <input type="date" name="bday">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Color</h1>
<p><?php $str='<input type="color">'; echo htmlspecialchars($str); ?> is used for input fields that should contain a color.</p>
<p>Depending on browser support, a color picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Select your favorite color:
  <input type="color" name="favcolor">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Range</h1>
<p><?php $str='<input type="range">'; echo htmlspecialchars($str); ?> is used for input fields that should contain a value within a range.</p>
<p>Depending on browser support, the input field can be displayed as a slider control.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  <input type="range" name="points" min="0" max="10">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Month</h1>
<p><?php $str='<input type="month">'; echo htmlspecialchars($str); ?> allows the user to select a month and year.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Birthday (month and year):
  <input type="month" name="bdaymonth">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Week</h1>
<p><?php $str='<input type="week">'; echo htmlspecialchars($str); ?> allows the user to select a week and year.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Select a week:
  <input type="week" name="week_year">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Time</h1>
<p><?php $str='<input type="time">'; echo htmlspecialchars($str); ?>  allows the user to select a time (no time zone).</p>
<p>Depending on browser support, a time picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Select a time:
  <input type="time" name="usr_time">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Datetime-local</h1>
<p><?php $str='<input type="datetime-local">'; echo htmlspecialchars($str); ?>  specifies a date and time input field, with no time zone.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Birthday (date and time):
  <input type="datetime-local" name="bdaytime">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Email</h1>
<p><?php $str='<input type="email">'; echo htmlspecialchars($str); ?>  is used for input fields that should contain an e-mail address.</p>
<p>Depending on browser support, the e-mail address can be automatically validated when submitted.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  E-mail:
  <input type="email" name="email">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Search</h1>
<p><?php $str='<input type="search">'; echo htmlspecialchars($str); ?>  is used for search fields (a search field behaves like a regular text field).</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Search Google:
  <input type="search" name="googlesearch">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Tel</h1>
<p><?php $str='<input type="tel">'; echo htmlspecialchars($str); ?>  is used for input fields that should contain a telephone number.</p>
<p>The tel type is currently supported only in Safari 8.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Telephone:
  <input type="tel" name="usrtel">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>Input Type Url</h1>
<p><?php $str='<input type="url">'; echo htmlspecialchars($str); ?>  is used for input fields that should contain a URL address.</p>
<p>Depending on browser support, the url field can be automatically validated when submitted.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<form>
  Add your homepage:
  <input type="url" name="homepage">
</form>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to final HTML test.</h1>
					<h3><label>1) What does<?php $s='<input type="radio">'; echo htmlspecialchars($s);?>defines in HTML?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">it defines Radiobutton</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">it defines a Checkbox</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">it defines a dropdown menu</label>
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
			echo '<a href="../htmlexamination\index.php " class="btn">Start Test</a>';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>

<br>
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
