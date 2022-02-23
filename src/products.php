<?php
//common variable and contant file
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include_once('config.php');
include_once('functions.php');
echo"uniuq";
print_r($_SESSION['unique']);
echo"<br>cart";
print_r($_SESSION['cartItems']);

?>
<!DOCTYPE html>
<html>


<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<!-- including header file -->
	<?php include('header.php') ?>
	<div id="main">
		<!-- Calling displayproduct function for displaying all products -->
		<?php echo displayproduct($Products); ?>
	
		<?php echo cart($Products); ?>
	</div>
	<!-- including footer file -->
	<?php include('footer.php'); ?>
</body>


</html>