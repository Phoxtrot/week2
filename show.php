<?php
include 'controller.php';
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$department = $_SESSION['department'];
$date = $_SESSION['date'];
$gender = $_SESSION['gender'];
$favcolor = $_SESSION['favcolor'];

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<title></title>
</head>
<body style="background-color: <?php echo ($favcolor); ?>">
	<div class="container align-text-center col-6 pt-5 justify-items-center" >
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> First Name:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($first_name);?></p>
		</div>
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> Last Name:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($last_name);?></p>
		</div>
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> Email:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($email);?></p>
		</div>
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> Department:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($department);?></p>
		</div>
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> Date:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($date);?></p>
		</div>
		<div style="overflow: hidden;">
		<h6 style="float: left; margin: 0; display: inline;"> Gender:</h6>
		<p style="float: right; margin: 0; display: inline;"> <?php echo($gender);?></p>
		</div>
	</div>
</body>
</html>