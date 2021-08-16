<?php 
	require("../Controller/edit_profile.php"); 
	include ("./Include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/editStyle.css">
	<script type="text/javascript" src="./JS/edit.js"></script>
	<?php include ("./Include/title.php"); ?>
</head>
<body style="background: #F3F3F3;">

	<div class="alert" id="a1">
		  <span class="closebtn" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  <span id ="strong">Error!</span> Some required fields are empty!
	</div>

	<div class="alert1" id="a2">
		  <span class="closebtn1" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  Nothing changed!
	</div>
	
	
	<?php include ("./Include/Templete.php"); ?>
	
	<div style="display: grid; place-items: center center">
		<hr style="height: 2px; width: 25%; background-color: seagreen; ">	

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete = 'on' enctype ='multipart/form-data' name="editForm" onsubmit="return isValid();">
			<fieldset style="border-color: seagreen; background-color: #E9FFFF; border-width: 1px; border-radius: 10px;">
				<fieldset style="border: none;">
			  	<legend style="text-align: center; margin-bottom: 10px; color: seagreen;">--Account Information--</legend>

					<label for="username">Username: </label>
					<input type="text" name="username" id="username" value="<?php echo $_SESSION['userName']; ?>" disabled>
					
					<br><br>

					<label for="attachment">Upload Profile Picture: </label>
					<input type="file" name="attachment" id="attachment">

					<span style="color: red;"><?php echo $attachmentErr; ?></span>

					<br><br>

					<label for="oldPassword">Old Password: </label>
					<input type="password" name="oldPassword" id="oldPassword" value="<?php echo $oldPassword; ?>" style ="margin-left: 4px;">
					<span style="color: red;"><?php echo $oldPasswordErr; ?></span>

					<br><br>

					<label for="password">New Password: </label>
					<input type="password" name="password" id="password" value="<?php echo $password; ?>" style ="margin-left: 4px;">

					<span style="color: red;"><?php echo $passwordErr . $passMsg ?></span>

					<br><br>

					<label for="password">Confirm New Password: </label>
					<input type="password" name="confirmPassword" id="confirmPassword" value="<?php echo $confirmPassword; ?>" style ="margin-left: 4px;">

					<span style="color: red;"><?php echo $confirmPasswordErr?></span>
					<span style="color: green;"><?php echo $passSuccessfulMsg; ?></span>

					<hr style="height: 1px; margin-top: 15px; border-width: 0px; background-color: seagreen;">

			  	</fieldset>

				<fieldset style="border: none;">
					<legend style="text-align: center; margin-bottom: 10px; color: seagreen;">--Personal Information--</legend>

					<label for="firstname">First Name: </label>
					<input type="text" name="firstname" id="firstname" value="<?php echo $firstName; ?>">
					<span style="color: red;"><?php echo $firstNameErr; ?></span>
					<br><br>

					<label for="lastname">Last Name: </label>
					<input type="text" name="lastname" id="lastname" value="<?php echo $lastName; ?>" style ="margin-left: 2px;">
					<span style="color: red;"><?php echo $lastNameErr; ?></span>

					<br><br>
					<label for="gender">Gender:</label>

				    <input type="radio" id="gender1" name="gender" value="Male"<?php if(!empty($_POST['gender']) && $_POST['gender'] == 'Male') { echo 'checked="checked"';} ?>>
				    <label for="Male">Male</label>

				    <input type="radio" id="gender2" name="gender" value="Female"<?php if(!empty($_POST['gender']) && $_POST['gender'] == 'Female') { echo 'checked="checked"';} ?>>
				    <label for="Female">Female</label>

				    <input type="radio" id="gender3" name="gender" value="Others"<?php if(!empty($_POST['gender']) && $_POST['gender'] == 'Others') { echo 'checked="checked"';} ?>>
				    <label for="Others">Others</label>

				    <span style="color: red;" id="gender"><?php echo $genderErr; ?></span>

					<br><br>

				    <label for="birthday">DoB:</label>
				    <input type="date" id="birthday" name="birthday" value="<?php echo $birthday; ?>">
				    <span style="color: red;"><?php echo $birthdayErr; ?></span>
				    <hr style="height: 1px; margin-top: 15px; border-width: 0px; background-color: seagreen;">


				</fieldset>

				<fieldset style="border: none;">
			    <legend style="text-align: center; color: seagreen; margin-bottom: 10px;">--Contact Information--</legend>
				    <label for="phone">Phone:</label>
				    <input type="tel" id="phone" name="phone" pattern="01[3,4,5,6,7,8,9]{1}[0-9]{8}" value = "<?php echo $phone; ?>" style= "margin-left: 5px;">

				    <br><br>

				    <label for="email">Email:</label>
				    <input type="email" id="email" name="email" value="<?php echo $email; ?>" >
				    <span style="color: red;"><?php echo $emailErr.$emailMsg; ?></span>

				    <br>

			  	</fieldset>
			  	
		  	</fieldset>
		  	<input type="submit" name="submit" value="Save">
		</form>
		<span style="color: green; float: right"><?php echo $successfulMessage; ?></span>
			  	<span style="color: red; float: right"><?php echo $errorMessage; ?></span>
</div>
<?php include ("./Include/Footer.php"); ?>
</body>
</html>