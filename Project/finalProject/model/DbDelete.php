
<?php

function delete($ap,$aprice){
	$conn =connect();
	$sql =$conn->prepare("DELETE FROM CART WHERE ap = ? and aprice =?");
	$sql->bind_param("si",$ap,$aprice);
	return $sql->execute();
}
?>