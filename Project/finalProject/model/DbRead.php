<?php 


function login($userName,$password){
	$conn =connect();
	$sql =$conn->prepare("SELECT * FROM USERS WHERE  userName= ? and password =?");
	$sql->bind_param("ss",$userName,$password);
	$sql->execute();
	$res = $sql->get_result();
	return $res ->num_rows === 1;
}
function getAllProducts(){
	$conn =connect();
	$sql =$conn->prepare("SELECT name, price FROM PRODUCTS ");
	
	$sql->execute();
	$res = $sql->get_result();
	return $res ->fetch_all(MYSQLI_ASSOC);
}
function getProduct($name){
	$conn =connect();
	$sql =$conn->prepare("SELECT name, price FROM PRODUCTS WHERE name= ? ");
	$sql->bind_param("s",$name);
	$sql->execute();
	$res = $sql->get_result();
	return $res ->fetch_all(MYSQLI_ASSOC);
}
function getAllAddedProducts(){
	$conn =connect();
	$sql =$conn->prepare("SELECT ap, aprice FROM CART ");
	
	$sql->execute();
	$res = $sql->get_result();
	return $res ->fetch_all(MYSQLI_ASSOC);
}
function getUserInfo($userName){
	$conn =connect();
	$sql =$conn->prepare("SELECT * FROM USERS WHERE userName= ? ");
	$sql->bind_param("s",$userName);
	$sql->execute();
	$res = $sql->get_result();
	return $res ->fetch_all(MYSQLI_ASSOC);

}