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
<h1>HTML Comment Tags</h1>
<p>You can add comments to your HTML source by using the following syntax:</p>
<?php
echo '<pre>';
$str="<!-- Write your comments here -->";
echo htmlspecialchars($str);
echo '</pre>';
?>
<p>Notice that there is an exclamation point (!) in the opening tag, but not in the closing tag.</p>
<p>With comments you can place notifications and reminders in your HTML:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<!-- This is a comment -->

<p>This is a paragraph.</p>

<!-- Remember to add more information here -->";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">try it Yourself>></a>';
echo '</pre>';
?>
<hr>

<h1>HTML Links</h1>
<p>In HTML, links are defined with the <?php $str='<a>'; echo htmlspecialchars($str); ?> tag:</p>
<?php
echo '<pre>';
$str='<a href="url">link text</a>';
echo htmlspecialchars($str);
echo '</pre>';
?>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<a href="http://www.w3schools.com/html/">Visit our HTML tutorial</a>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>The<b> href </b>attribute specifies the destination address (http://www.w3schools.com/html/) of the link.</p>
<p>The<b> link text </b>is the visible part (Visit our HTML tutorial).</p>
<p>Clicking on the link text will send you to the specified address.</p>
<hr>

<h1>HTML Tables</h1>
<p>An HTML table is defined with the <?php $str='<table>'; echo htmlspecialchars($str); ?> tag.</p>
<p>Each table row is defined with the <?php $str='<tr>'; echo htmlspecialchars($str); ?> tag. A table header is defined with the <?php $str='<th>'; echo htmlspecialchars($str); ?> tag. By default, table headings are bold and centered. A table data/cell is defined with the <?php $str='<td>'; echo htmlspecialchars($str); ?> tag.</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>HTML Table - Cells that Span Many Columns</h1>
<p>To make a cell span more than one column, use the<b> colspan </b>attribute:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<table style="width:100%">
  <tr>
    <th>Name</th>
    <th colspan="2">Telephone</th>
  </tr>
  <tr>
    <td>Bill Gates</td>
    <td>55577854</td>
    <td>55577855</td>
  </tr>
</table>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>HTML Table - Cells that Span Many Rows</h1>
<p>To make a cell span more than one row, use the <b> rowspan </b>attribute:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>Bill Gates</td>
  </tr>
  <tr>
    <th rowspan="2">Telephone:</th>
    <td>55577854</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
</table>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<h1>HTML Table - Adding a Caption</h1>
<p>To add a caption to a table, use the <?php $str='<caption>'; echo htmlspecialchars($str); ?> tag:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<table style="width:100%">
  <caption>Monthly savings</caption>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$50</td>
  </tr>
</table>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
<h1>Answer the following question correct answer will lead you to next chapter.</h1>
					<h3><label>1) Which one of following tag is not attribute of table?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<src>'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<tr>'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<th>'; echo htmlspecialchars($s); ?></label>
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
			echo '<a href="chapter9.php" class="btn">Next>></a>';
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
