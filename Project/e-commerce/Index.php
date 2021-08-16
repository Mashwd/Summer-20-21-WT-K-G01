<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "icon" href = '/e-commerce/Files/title.png' type = "image/x-icon"sizes="16x16">
	<title>Home</title>
	<style type="text/css">
		button{
			margin-left: 3px;
			background: #800000; 
			color: white;
			cursor: pointer;
			transition: 0.3s;
		}
		button:hover{
			background-color: white;  
			color: #800000;
		}
	</style>
</head>
<body>
	<div>
		<span style="background: seagreen; text-align: center; color: white; height: 90px; display: block;"><br><span style="text-align: center; font-size: 40px;"><img src="\e-commerce\logo\e-shop.png" alt="logo" style="width: 25px; height: 25px">E-Shop<span style="text-align: center; font-size: 10px;">You shop, We ship</span></span></span>

		<button onclick="document.location.href='Index.php'">Start</button>
		<button onclick="document.location.href='/e-commerce/view/login.php'">log-in</button>
		<button onclick="document.location.href='/e-commerce/view/register.php'">Register</button>

	</div>
	<hr>	

	<div style="display: grid; place-items: center center">
		<span style="text-align:center; font-size: 45px;">
			<?php 
				if(!isset($_GET['Msg']))
				{
					echo "-Welcome to our E-shop-";
				}
				else
				{

					echo "Thank you!";
				}
			 ?>
			 </span><br>
		<span style="margin-left:auto; margin-right: auto; display: table; color: green;"><?php if(isset($_GET['Msg']))
				{echo $_GET['Msg'];} ?></span>
			<br>

		<img src="\e-commerce\logo\logo.png" alt="e-shop logo" style="width:300px;height:100px;"><br><br><br>

	</div>
	<div>
		<span style="font-size: 20px; margin-right: 20%; margin-left: 20%;">
			<?php if(!isset($_GET['Msg']))echo "Description:"; ?>
		</span>
		<p style=" color:black; text-align: center; margin-left: 20%;margin-right: 20%;"><?php if(!isset($_GET['Msg']))echo "E-shop.com is a vast Internet-based enterprise that sells books, music, movies, housewares, electronics, toys, and many other goods, either directly or as the middleman between other retailers and e-shop.com's millions of customers. ... The company also makes the market-leading Kindle e-book readers. Group's mission is to make it easy to do business anywhere. ... We provide the technology infrastructure and marketing reach to help merchants, brands and other businesses to leverage the power of new technology to engage with their users and customers and operate in a more efficient way."; ?></p>
	</div>
	<div>
		<span style="font-size: 20px; margin-right: 20%; margin-left: 20%;">
			<?php if(!isset($_GET['Msg']))echo "Partnership:"; ?>
		</span>
		<p style="background: lightgrey; color:black; text-align: center; margin-left: 20%;margin-right: 20%;">
		<?php
			if(!isset($_GET['Msg'])){
			echo "<ol style=\"margin-left: 20%;margin-right: 20%;\"\>";
				echo "<li>";
					echo "Apex.";
				echo "</li>";
				echo "<li>";
					echo "Bata.";
				echo "</li>";
				echo "<li>";
					echo "Brac Bank.";
				echo "</li>";
			echo "</ol>";
			echo "<br>";
		}
		?>
	</p>
	</div>
</body>
<?php
	if(isset($_GET['Msg'])){
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";

	}
?>
<?php include ("View/Include/Footer.php"); ?>
</html>