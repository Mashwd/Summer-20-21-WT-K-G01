<?php 

function register($userName,$password,$fullName,$gender,$birthDate,$address,$mobileNo,$email){
	$conn =connect();
	$sql =$conn->prepare("INSERT INTO USERS (userName,password,fullName,gender,birthDate,address,mobileNo,email) VALUES (?,?,?,?,?,?,?,?)");
	$sql->bind_param("ssssssis",$userName,$password,$fullName,$gender,$birthDate,
		$address,$mobileNo,$email);
	return $sql->execute();
}
function addToCart($ap,$aprice){
	$conn =connect();
	$sql =$conn->prepare("INSERT INTO CART (ap,aprice) VALUES (?,?)");
	$sql->bind_param("si",$ap,$aprice);
	return $sql->execute();
}
