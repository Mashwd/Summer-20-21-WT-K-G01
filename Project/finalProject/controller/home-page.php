<?php 
 include "../controller/config.php";
	session_start();
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'tittle.php';?>
	<link rel="stylesheet" type="text/css" href="../view/css/TempleteStyle.css">
</head>
<body>
	<div class="parent">
		<br>
		<div id="head">
			<img src="../view/png/e-shop.png" alt="logo" id="img1">

			<div id="id1">
				E-Shop
			</div>
			
			<div id="id2">
				You shop, We ship
			</div>
		</div>
	<div id="b1">
			<span style="color: white;"><?php 
			 include 'profile-include.php' ?></span>
			 <span style="color: white;"><?php 
			 include 'shop-include.php' ?></span>
			 <span style="color: white;"><?php 
			 include 'change-password-include.php' ?></span>
			 <span style="color: white;"><?php 
			 include 'notice-include.php' ?></span>
			 <?php 
	        include 'logout-include.php' ?>
	</div>
	<hr style="display: block; width: 100%;">

	<h1><?php include 'top-heading.php';?>

	
	
	<!-- <button onclick="location.href='../controller/shop-products.php'">Shop Products</button> -->
	<br><br>
	<!-- <span><p style="color:green;text-align:center;background: lightgreen;">Click here to <a href="notice.php">View notice</a></p></span> -->
	<!-- <?php 
	 include 'logout-include.php' ?> -->
	 <?php 
	 include 'footer.php' ?>
	<!-- <p><a href="../controller/changePassword.php">Change Password</a></p> -->
	</h1>

</body>
</html>