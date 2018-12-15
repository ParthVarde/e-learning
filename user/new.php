<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
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
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		$query = "SELECT Title,Dinfo FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/
		while($row = mysqli_fetch_array($result))
		{
			$title = $row["Title"];
			$dinfo = $row["Dinfo"];
		}
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1><?php echo $title; ?></h1>
				</div>
			</div>
		</div>
	</header>
		<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
			<h1><?php echo $title; ?></h1><br><label><?php echo $dinfo; ?></label><button onclick="location.href='../course/chapter.php'" class="btn btn-block">Start Learing>></button>
		</div>
		<div class="container-fluid" style="margin-left:82px;margin-right:450px;">
			<h1>Chapters :</h1>
			<?php
			$query1 = "SELECT Title FROM chapter WHERE Subject='$title'";
			$result1 = mysqli_query($strconn,$query1);
			/*if($result1)
			{
				echo "success";
			}*/
			while($row = mysqli_fetch_array($result1))
			{
			
				echo '<ul><li>Chapter :'.$row[0].'</li></ul>';
			} ?>
			<!--<li>Chapter 2: Write HTML Using Notepad TextEdit</li><li>Chapter 3: HTML Headings</li><li>Chapter 4:HTML Attributes </li>
			<li>Chapter 5:HTML Horizontal Rules</li><li>Chapter 6: HTML Text Formatting</li><li>Chapter 7: The HTML<?php $str='<q>'; echo htmlspecialchars($str); ?> element defines a short quotation.</li>
			<li>Chapter 8: HTML Comment Tags</li><li>Chapter 9: Chapter 9:HTML Lists</li><li>Chapter 10: The<?php $str='<div>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 11: HTML Iframes</li><li>Chapter 12: The<?php $str='<form>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 13: The<?php $str='<select>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 14: Input Type Text</li>-->
			<button onclick="location.href='purchase.php'" class="btn btn-block">Purchase Now>></button><br>
			<button onclick="location.href='../download/index.php'" class="btn btn-block">Download free E-Books</button><br>
		</div>
	<?php
		include "footer.php";
	?>
</body>
</html>
