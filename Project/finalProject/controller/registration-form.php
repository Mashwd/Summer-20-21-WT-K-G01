<?php 
	
	 require '../model/DbConnect.php';	
    require '../model/DbInsert.php';
	include "../controller/config.php";
	// define("filepath", "user.json");
	$fullName = $userName = $password = $birthDate = $gender = $email = $mobileNo = $address  ="";
	$isValid = true;
	$fullNameErr = $userNameErr = $passwordErr = $birthDateErr =$genderErr =$emailErr = $mobileNoErr =$addressErr ="";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fullName = $_POST['fullname'];
		$userName = $_POST['username'];
		$password = $_POST['password'];
		$birthDate= $_POST['birthDate'];
		$gender   = $_POST['gender'];
		$email    = $_POST['email'];
		$mobileNo = $_POST['mobileNo'];
		$address  = $_POST['address'];

		if(empty($fullName)) {
			$fullNameErr = "Full name can not be empty!";
			$isValid = false;
		}
		if(empty($userName)) {
			$userNameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Password can not be empty!";
			$isValid = false;
		}
		if(empty($birthDate)) {
			$birthDateErr = "Date Of Birth can not be empty!";
			$isValid = false;
		}
		if(empty($gender)) {
			$genderErr = "Gneder can not be empty!";
			$isValid = false;
		}
		if(empty($email)) {
			$emailErr = "Email can not be empty!";
			$isValid = false;
		}
		if(empty($mobileNo)) {
			$mobileNoErr = "Mobiel No can not be empty!";
			$isValid = false;
		}
		if(empty($address)) {
			$addressErr = "Address can not be empty!";
			$isValid = false;
		}

		if($isValid) {
			if(strlen($userName)>10)
			{
				$userNameErr="Username max size 10!";
				$isValid=false;

			}
			if(strlen($password)>8){
				$passwordErr="Password max size 8!";
				$isValid=false;
			}
			if($isValid){
			$fullName = test_input($fullName);
			$userName = test_input($userName);
			$password = test_input($password);
			$birthDate = test_input($birthDate);
			$gender = test_input($gender);
			$email = test_input($email);
			$mobileNo = test_input($mobileNo);
			$address = test_input($address);
			
			$fileData = register($userName,$password,$fullName,$gender,$birthDate,$address,$mobileNo,$email);
			// if(file_exists('user.json')){
			// 	$current_data = file_get_contents('user.json');
			// 	$array_data=json_decode($current_data,true);
			// 	$arr1 = array("fullname" => $fullName, "username" => $userName, "password" => $password ,"birthDate" =>$birthDate , 
			// 	"gender"=>$gender ,"email"=>$email ,"mobileNo"=>$mobileNo,"address"=>$address);
			// }
			// $array_data [] =$arr1;
			// $final_data =json_encode($array_data);
			
		
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
	<link rel="stylesheet"  href="../view/css/TempleteStyle.css"></link>
	<script src="../view/js/registration.js"></script>
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

	<hr style="display: block; width: 100%;">

	<h1 style="background-color:MediumSeaGreen;"><?php include 'top-heading.php';?>


	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" 
		name="registrationForm" onsubmit="return isValid()" >
		<fieldset>
			<legend>Registration Form:</legend>

			<label for="fullname">Full Name:</label>
			<input type="text" name="fullname" id="fullname">
			<span style="color:red" id="fullNameErr"><?php echo $fullNameErr; ?></span>

			<br><br>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="<?php echo $userName; ?>">
			<span style="color:red"id="userNameErr"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red" id="passwordErr"><?php echo $passwordErr; ?></span>

			<br><br>
			<label for="birthDate">Date Of Birth:</label>
			<input type="date" name="birthDate" id="birthDate">
			<span style="color:red" id="birthDateErr"><?php echo $birthDateErr; ?></span>
			<br><br>
			<label>Gender:</label>
			<input type ="radio" id="gender" name="gender" value="male">
		    <label for="male">Male</label>
		
		    <input type ="radio" id="gneder" name="gender" value="female">
		    <label for="female">Female</label>
		
		    <input type ="radio" id="gender" name="gender" value="other">
		    <label for="other">Other</label>
		    <span style="color:red" id="genderErr"><?php echo $genderErr; ?></span>

		    <br><br>
		    <label for="email"> Email: </label>
		    <input type="email" id="email" name="email">
		    <span style="color:red" id="emailErr"><?php echo $emailErr; ?></span>

		    <br><br>
		    <label for="mobileNo"> Mobile No : </label>
		    <input type="tel" id="mobileNo" name="mobileNo">
		    <span style="color:red" id="mobileNoErr"><?php echo $mobileNoErr; ?></span>

		    <br><br> 
		    <label for="address"> Address: </label>
		    <input type="text" id="address" name="address">
		    <span style="color:red" id="addressErr" ><?php echo $addressErr; ?></span>

		    <br><br>




			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;" id="errorMessage"><?php echo $errorMessage; ?></p>

	<br>

	<p>Back to<a href="../controller/login-form.php">Login</a></p>
	 <?php 
	 include 'footer.php' ?>
	 
	 </h1>

	

</body>
</html>