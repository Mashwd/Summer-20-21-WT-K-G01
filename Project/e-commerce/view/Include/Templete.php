<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./CSS/TempleteStyle.css">

	<script type="text/javascript" src="./JS/templete.js"></script>
</head>
<body onload="currentTime();">
	<div class="parent">
		<br>
		<div id="head">
			
			<img src="\e-commerce\logo\e-shop.png" alt="logo" id="img1">

			<div id="id1" onclick = "location.href='/e-commerce/view/adminHome.php';" style="cursor: pointer;">
				E-Shop
			</div>
			
			<div id="id2">
				You shop, We ship
			</div>
			
		</div>
		<br>
	</div>
	<div id="b1">
			<button class="button" onclick="document.location.href='/e-commerce/view/adminHome.php'">Home</button>
			<button class="button" onclick="document.location.href='/e-commerce/view/viewProfile.php'">View Profile</button>
			<button class="button" onclick="document.location.href='/e-commerce/view/editProfile.php'">Edit Profile</button>

			<button class="button" onclick="document.location.href='/e-commerce/view/accountList.php'">Account list</button>

			<button class="button" onclick="document.location.href='/e-commerce/view/addAccount.php'">Add accounts</button>

			<button class="button" onclick="document.location.href='/e-commerce/view/postedNotice.php'">Notice</button>

			<form action="/e-commerce/Controller/admin_home.php" method="POST" id="form1">
				<input type="submit" name="logout" value="log out" id = "id3">
			</form>
		</div>

	<hr style="display: block; width: 100%;">

	<div>

		<div id="id4">
			Hey 
			<em style="color: green;">
				'<?php echo $_SESSION['userName']; ?>',
			</em>
			You are logged in as 
			<b style="color: red;">
				'<?php echo $_SESSION['accountType']; ?>' &nbsp
			</b>
		</div>

		<div id = "clock" class="d-clock"> </div>
	</div>

	<br><br>

	<div style="text-align:center;">
		<span style="text-align:center; color: seagreen; font-size: 25px"><?php echo $CURRENT_PAGE; ?></span>
	</div>


</body>
</html>
