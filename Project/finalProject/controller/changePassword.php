<?php 
	require '../model/DbConnect.php';
	require '../model/DbUpdate.php';
	include "../controller/config.php";
	// define("filepath", "user.json");
	session_start();


	 $userName =$_SESSION['username'];

	 $password ="";
	$isValid = true;
	 $userNameErr = $passwordErr  ="";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		
		// $userName = $_POST['username'];
		$password = $_POST['password'];
		
		
		if(empty($userName)) { 
			$userNameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Password can not be empty!";
			$isValid = false;
		}
		
		if($isValid){
			if(strlen($userName)>10){
				$userNameErr="Username max size 10!";
				$isValid=false;
			}
			if(strlen($password)>8){
				$passwordErr="Password max size 8!";
				$isValid=false;
			}
		

		if($isValid) {
			
			$userName = test_input($userName);
			$password = test_input($password);
			
			
			$fileData = changePassword($userName,$password);
		
			
		
			if($fileData) {
				$successfulMessage = "Successfully saved.";
			}
			else {
				$errorMessage = "Error while saving.";
			}
		}
		}
	}
	
	

	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
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
		<br>
	</div>
	<div id="b1">
			<span style="color: white;"><?php 
	 include 'homepage-include.php' ?></span>
	</div>

	<hr style="display: block; width: 100%;">	

	<h1><?php include 'top-heading.php';?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Change Password:</legend>

			

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="<?php echo $userName;?>" disabled>
			<span style="color:red"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>
			




			<input type="submit" name="submit" value="Register">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	<p>Back to<a href="login-form.php">Login</a></p>
	<p>Back to<a href="home-page.php">Home</a></p>
	</h1>
	
	 <?php 
	 include 'footer.php' ?>
	

</body>
</html>