<?php 
session_start();

echo "<pre>";
print_r($_SESSION['cart']);

?>
<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<button onclick="location.href='../controller/confirmation.php'">Confirm</button>
	<br>
	<?php 
	 include 'homepage-include.php' ?>
	 <br><br>
	<?php 
	 include 'logout-include.php' ?>
	  <?php 
	 include 'footer.php' ?>
	
	


</body>
</html>
