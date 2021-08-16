<?php 
	require("../Controller/log-in.php"); 
	include ("./Include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = '/e-commerce/Files/title.png' type = "image/x-icon"sizes="16x16">
	<link rel="stylesheet" type="text/css" href='./CSS/loginStyle.css'>
	<script type="text/javascript" src="./JS/login.js"></script>
	<?php include ("./Include/title.php"); ?>

</head>
<body style="background: #F3F3F3;">

	<div class="alert" id="a1">
		  <span class="closebtn" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  <strong>Error!</strong> Some required fields are empty!
	</div>
	
    <div>
	    <span style="background: seagreen; text-align: center; color: white; height: 90px; display: block;"><br><span style="text-align: center; font-size: 40px;"><img src="\e-commerce\logo\e-shop.png" alt="logo" style="width: 25px; height: 25px">E-Shop<span style="text-align: center; font-size: 10px;">You shop, We ship</span></span></span>

	    <button onclick="document.location.href='/e-commerce/Index.php'">Start</button>
	    <button onclick="document.location.href='/e-commerce/view/register.php'">Register</button>
    </div>
    <hr>

	<div style="display: grid; place-items: center center"><br>
		<img src="\e-commerce\logo\login.png" alt="logo" style="width: 40px; height: 40px">

		<h2 style="text-align:center; font-size: 30px;font-family:optima;"><?php echo $CURRENT_PAGE; ?></h2> 

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete = 'off' name="loginForm" onsubmit="return isValid()">
			<fieldset style = "background-color: lightgray; border-radius: 10px;"><br>

				
				<label for="username" style="float: left;">Username <span style="color: red;">*</span>: </label>
				
				<input type="text" name="username" id="username" style = "float: right;" value="<?php echo $userName; ?>">
				<span style="color: red; float: left;">
					<?php 
						if(!empty($userName))
						{
							echo "<br>";
						}
						echo $userNameErr; 
					?>
				</span>
				
				

				<br><br>

				
				<label for="password" style="float: left;">Pasword <span style="color: red;">*</span>: </label>
				 
				<input type="password" name="password" id="password" style = "float: right;">
				
				<span style="color: red;float: left;">
					<?php 
						echo $passwordErr; 
					?>
				</span>
				<br><br>
				<span style="color: red; margin-right: 100px"><?php echo $errorMessage; ?></span>

			</fieldset>
			<input type="submit" name="submit" value="log in" id="submit">	
		</form>
		

		<br><br>
		<span style="float:right;">Don't have an account?<a href="register.php">Register</a></span>

		<br>

		<!--<span style="color: green;"><?php /*echo $successfulMessage;*/ ?></span> -->
		


	</div>
	<br><br><br><br><br><br><br><br><br>
<?php include ("./Include/Footer.php"); ?>
</body>
</html>