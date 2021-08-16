<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact seller</title>
</head>
<body>
	<h4> </h4>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Contact seller</legend>
	<label for="message">Enter Your Message:</label>
	<input type="text" name="message" id="message">
		</fieldset>
		<br>
		<input type="submit" name="submit" value="Send" >
		<p>Go Back to <a href="../conroller/home-page.php">Homepage</a></p> 
	</form>
</body>
</html>