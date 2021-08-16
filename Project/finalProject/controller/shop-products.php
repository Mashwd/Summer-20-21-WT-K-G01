<?php
	require '../model/DbConnect.php';
	require '../model/DbRead.php';
	require '../model/DbInsert.php';
	$successfulMessage = $errorMessage = "";
	// $errorMessage="";
	$productList = getAllProducts();
	$name =empty($_GET['name']) ? "" : $_GET['name'] ;
	if(empty($_GET['search']) or empty($name)){
		$productList = getAllProducts();
	}
	else{
		$productList = getProduct($name);
	}
	if(!empty($_GET['ap']) and !empty($_GET['aprice'])){
		$response = addToCart($_GET['ap'],$_GET['aprice']);
		if($response){
			$successfulMessage = "Successfully added to cart";

		}
		else{
			$errorMessage = "Error while adding";
		}

	}

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
	 <span style="color: white;"><?php 
	 include 'cart-include.php' ?></span>
	 <span style="color: white;"><?php 
	 include 'review-include.php' ?></span>
	 <?php 
	 include 'logout-include.php' ?>
	</div>

	<hr style="display: block; width: 100%;">	
	<h1><?php include 'top-heading.php';?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<input type="text" name="name" value="<?php echo $name ; ?>">
		<input type="submit"name="search"value="search">
		



	</form>
	<?php
	if(count($productList)>0){


		echo"<table>";
		echo"<tr>";
		echo"<th>Product Name</th>";
		echo"<th>Price</th>";
		echo"<th>Action</th>";
		echo"</tr>";
		echo"<br>";
		for($i=0;$i < count($productList);$i++){
			echo"<tr>";
			echo"<td>" . $productList[$i]["name"] . "</td>";
			echo"<td>" . $productList[$i]["price"] . "</td>";
			echo"<td> <a href=' " . $_SERVER['PHP_SELF'] . 
			"?ap=" . $productList[$i]["name"] . "
			&aprice=" . $productList[$i]["price"]  ."'>Add to Cart </a></td>";
			
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

	
	
	<!-- <p style="color:green;text-align:center">Click here to <a href="contact-seller.php">Contact Seller</a></p> -->
	<br>
	<!-- <p>Go to  <a href="../controller/add-to-cart.php">Yous Cart</a></p>
	<p>Click here to <a href="../controller/review.php">Review a product</a></p>  -->
	
	<!-- <p>Go Back to <a href="home-page.php">Homepage</a></p>  -->
	
	<br><br>
	
	 <?php 
	 include 'footer.php' ?>
	 </h1>
	

</body>
</html>