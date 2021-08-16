<?php 
	require '../model/DbConnect.php';
	require '../model/DbRead.php';
	require '../model/DbInsert.php';
	require '../model/DbDelete.php';
	$successfulMessage = $errorMessage = "";
	// $errorMessage="";
	$addedProductList = getAllAddedProducts();
	include "../controller/config.php";

	if(!empty($_GET['ap']) and !empty($_GET['aprice'])){
		$response = delete($_GET['ap'],$_GET['aprice']);
		if($response){
			$addedProductList = getAllAddedProducts();
			$successfulMessage = "Successfully removed from cart";

		}
		else{
			$errorMessage = "Error while adding";
		}

	}


?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include 'tittle.php'; ?>
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
	 <span style="color: white;"><?php 
	 include 'shop-include.php' ?></span>
	 <?php 
	 include 'logout-include.php' ?>
	</div>

	<hr style="display: block; width: 100%;">	

	<h1><?php include 'top-heading.php';?>
	<?php
	if(count($addedProductList)>0){
		echo"<table>";
		echo"<tr>";
		echo"<th>Product Name</th>";
		echo"<th>Price</th>";
		echo"<th>Action</th>";
		echo"</tr>";
		echo"<br>";
		for($i=0;$i < count($addedProductList);$i++){
			echo"<tr>";
			echo"<td>" . $addedProductList[$i]["ap"] . "</td>";
			echo"<td>" . $addedProductList[$i]["aprice"] . "</td>";
			echo"<td> <a href=' " . $_SERVER['PHP_SELF'] . 
			"?ap=" . $addedProductList[$i]["ap"] . "
			&aprice=" . $addedProductList[$i]["aprice"]  ."'>Remove </a></td>";
			
			echo"</tr>";
			
		}
		echo"<br>";
		echo"</table>";
	}
	else{
		echo "<h3> No Records Found... !<h3>";

	}

		?>
	
	 <!--  <p>Go back to  <a href="../controller/shop-products.php">shop</a></p> -->
	<br><br>
	
	 <?php 
	 include 'footer.php' ?>
	 </h1>

</body>
</html>
    <p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>


	
