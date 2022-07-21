<?php
include_once('session.php'); 
$user_id = $_SESSION['USER_ID'] ?? null;
$user_type = $_SESSION['USER_TYPE'] ?? null;
if ($user_type == 'SELLER') {
	$dashboard = 'http://localhost/flipwheels/seller/';
}elseif($user_type == 'BUYER'){
	$dashboard = 'http://localhost/flipwheels/buyer/';
}else{
	$dashboard = 'http://localhost/flipwheels/index.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flippwheels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo 'http://localhost/flipwheels/css/style.css'?>">
</head>

<body>

<div class="wrapper">
<header>
	<nav class="navbar">
		<a href="http://localhost/flipwheels/"><img class="logo" src="<?php echo 'http://localhost/flipwheels/uploads/logo.png';?>"></a>
		<ul>
			<li><a href="<?php echo 'http://localhost/flipwheels/products.php'; ?>">PRODUCTS</a></li>
			<!-- <li><a href="review.html"> REVIEW </a></li> -->
			<!--<li><a href="<?php echo 'http://localhost/flipwheels/helpdesk.html'; ?>">CONTACT US </a></li>-->
            
			<li><a href="<?php echo 'http://localhost/flipwheels/product_form.php'; ?>">SELL</a></li> 
			<?php if($user_id): ?>
				<li><a href="<?php echo $dashboard;?>"><i class="fas fa-user"></i><?php echo strtoupper($_SESSION['USER_NAME'] ?? ''); ?></a></li>
				<li><a href="http://localhost/flipwheels/logout.php">LOGOUT</a></li>
			<?php else: ?>
			<li><a href="<?php echo 'http://localhost/flipwheels/login.php'; ?>"> LOGIN </a></li>
			<li><a href="<?php echo 'http://localhost/flipwheels/register.php'; ?>"> REGISTER </a></li>
			<?php endif; ?>
		</ul>
	</nav>
</header>