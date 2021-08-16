<?php
	require '../model/DbConnect.php';
	require '../model/DbRead.php';
	require '../model/DbInsert.php';

	// $errorMessage="";
	$productList = getAllProducts();
	$name =empty($_GET['name']) ? "" : $_GET['name'] ;
	if(empty($name)){
		$productList = getAllProducts();
	}
	else{
		$productList = getProduct($name);
	}
	
	

    // include "config.php";

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
	?>