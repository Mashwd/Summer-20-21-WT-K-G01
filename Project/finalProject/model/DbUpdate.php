<?php 



function changePassword($userName,$password){
	$conn =connect();
	$sql =$conn->prepare("UPDATE USERS set password = ? where username = ?");
	$sql->bind_param("ss",$password,$userName);
	return $sql->execute();
} 