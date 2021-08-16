<?php 
	require("../Controller/view_profile.php"); 
	include ("./Include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include ("./Include/title.php"); ?>
</head>
<body style="background: #F3F3F3;">
	
    <?php include ("./Include/Templete.php"); ?>
    <hr style="height: 2px; width: 15%; background-color: seagreen; ">

	<div style="display: flex; justify-content: center; align-content: center;">

		<fieldset style="border-radius: 10px; background-color: #E9FFFF; border-width: 2px; width: 300px">
			
			<div style="display: flex; justify-content: center;align-content: center; background-color: ghostwhite;">
				<img src="<?php echo $profilePicture; ?>" width="150" height="180" style="border: 2px solid black;">
			</div>
			<div  style="text-align: center;">
				
					<p><b>Username: </b><?php echo $userName; ?></p>
					<p><b>Account type: </b><?php echo $accountType; ?></p>
					<p><b>First Name: </b><?php echo $firstName; ?></p>
					<p><b>Last Name: </b><?php echo $lastName; ?></p>
					<p><b>Gender: </b><?php echo $gender; ?></p>
					<p><b>Date of Birth: </b><?php echo $birthday; ?></p>
					<p><b>Phone: </b>
						<?php 
							if(empty($phone))
							{
								$phone = "Not Provided";
							}
							echo $phone; 
						?></p>
					<p><b>Email: </b><?php echo $email; ?></p><br>

					<a href="editProfile.php" style="float: right;">Edit</a>
				
			</div>
		</fieldset>

	</div>
	
<?php include ("./Include/Footer.php"); ?>
</body>
</html>