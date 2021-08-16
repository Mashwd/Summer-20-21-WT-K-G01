<?php
	require '../model/DbConnect.php';
	require '../model/DbRead.php';
	require '../model/DbInsert.php';
	session_start();
	$fullName = $userName = $password = $birthDate = $gender = $email = $mobileNo = $address  ="";
	$successfulMessage = $errorMessage = "";
	// $errorMessage="";
	$userInfo = getUserInfo($_SESSION['$userName']);
	$name =empty($_GET['userName']) ? "" : $_GET['userName'] ;
	if(!empty($name)){
		$userInfo = getUserInfo($_SESSION['$userName']);
	}
	// else{
	// 	$productList = getProduct($name);
	// }
	// if(!empty($_GET['ap']) and !empty($_GET['aprice'])){
	// 	$response = addToCart($_GET['ap'],$_GET['aprice']);
	// 	if($response){
	// 		$successfulMessage = "Successfully added to cart";

	// 	}
	// 	else{
	// 		$errorMessage = "Error while adding";
	// 	}

	

    include "../controller/config.php";?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'tittle.php';?>
	<link rel="stylesheet" type="text/css" href="../view/css/TempleteStyle.css">
	<link rel="stylesheet" type="text/css" href="../view/css/table.css">
	<title></title>
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
		<br>
	</div>
	<div id="b1">
			<span style="color: white;"><?php 
	 include 'homepage-include.php' ?></span>
	</div>

	<hr style="display: block; width: 100%;">	
	<h1><?php include 'top-heading.php';?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		
		



	</form>
	<?php
	if(count($userInfo)>0){


		echo"<table>";
		echo"<tr>";
		echo"<th>User Name</th>";
		echo"<th>Fullname</th>";
		echo"<th>Gender</th>";
		echo"</tr>";
		echo"<br>";
		for($i=0;$i < count($userInfo);$i++){
			echo"<tr>";
			echo"<td>" . $userInfo[$i]["userName"] . "</td>";
			echo"<td>" . $userInfo[$i]["fullName"] . "</td>";
			echo"<td> <a href=' " . $_SERVER['PHP_SELF'] . 
			"?userName=" . $userInfo[$i]["userName"] . "
			&fullName=" . $userInfo[$i]["fullName"]  ."'>Add to Cart </a></td>";
			
			echo"</tr>";
			
		}
		echo"<br>";
		echo"</table>";
	}
	else{
		echo "<h3> No Records Found... !<h3>";

	}

		?>
	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	
	
	<p style="color:green;text-align:center">Click here to <a href="contact-seller.php">Contact Seller</a></p>
	<br>
	<p>Go to  <a href="../controller/add-to-cart.php">Yous Cart</a></p>
	<p>Click here to <a href="../controller/review.php">Review a product</a></p> 
	
	<!-- <p>Go Back to <a href="home-page.php">Homepage</a></p>  -->
	
	<br><br>
	<?php 
	 include 'logout-include.php' ?>
	 <?php 
	 include 'footer.php' ?>
	 </h1>

</body>
</html>


