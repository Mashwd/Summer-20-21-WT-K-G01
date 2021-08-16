<?php 
	require("../Controller/admin_home.php");
	include ("./Include/config.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include ("./Include/title.php"); ?>
	<link rel="stylesheet" type="text/css" href="./CSS/homeStyle.css">
	<script type="text/javascript" src="./JS/home.js"></script>
</head>
<body>
	
	<?php include ("./Include/Templete.php"); ?>

	<h4 style="text-align: center;">Welcome, <?php echo $_COOKIE['cookie_name']; ?></h4>

	<hr style="width: 60%">
	<div style="display: flex; justify-content: center; align-content: center;">
		<div style="margin-right: 20px;">
			<br><br>
			<fieldset style="border-radius: 20px; background-color: #e4e9eb;">
				<span style="font-size: 20px; color: forestgreen;display: flex;justify-content: center; align-content: center; font-weight: bold;">Log</span><hr>
			<div style="display: flex; justify-content: center; align-content: center; max-width: 450px; overflow-y: scroll; height:270px;">
				
					
					<?php
						$fileData = getTransitions();
						echo "<ul style='list-style-type:square';>";
						foreach ($fileData as $notice) {
							
							echo "<li>";
							echo "<span style = 'color:red;'>['".$notice['executor']."']</span>".": ".$notice['message']."<span style = 'color:blue; float: right'>&nbsp&nbsp&nbsp&nbsp Sent: ".$notice['transitionTime']."</span>.";
							echo "</li>";
							echo "<hr>";
						}
						echo "</ul>";
					?>
				
			</div>
			</fieldset>

		</div>

		<div>
			<span style="font-size: 20px; color: forestgreen;display: flex;justify-content: center; align-content: center; font-weight: bold;">Post Notice:</span>
			<br>
			<div style="display: flex; justify-content: center; align-content: center;">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="noticeForm" name="noticeForm" onsubmit = "return isValid();" >
					<textarea style=" border-width: 2px; resize: none; background-color: #f0f0f5"  rows="15" cols="50" name = "notice" ></textarea>

					<br>

					<input type="submit" name="submit" value="Post" style="float: right;">
				</form>
				<br><br>
			</div>
			<span style="color: forestgreen ;display: flex;justify-content: center; align-content: center;" id="notice"> <?php echo $noticeMsg; ?></span>



			<br><br>

		</div>
		<div class="vl"></div>

		<div>
			<br><br>
			<fieldset style="background-color: #e4e9eb; border-radius: 20px;">

				<span style="font-size: 20px; color: forestgreen;display: flex;justify-content: center; align-content: center; font-weight: bold;">Number of Accounts</span><hr>
			
				<div style="display: flex; justify-content: center; align-content: center;">

					<table border = 2px>
						<tr>
							<td style="text-align: center; font-size: 25px; color: black; background-color: #ff9900; font-weight: bold;">
								<?php echo "Total Account: ".$totalAccount; ?>
							</td>
							<td style="text-align: center; font-size: 25px; color: black; background-color: #1a8cff; font-weight: bold;">
								<?php echo "Total Moderator: ".$totalModerator; ?>
							</td>
						</tr>
						<tr>
							<td style="text-align: center; font-size: 25px; color: black; background-color: deepskyblue; font-weight: bold;">
								<?php echo "Total Seller: ".$totalSeller; ?>
							</td>
							<td style="text-align: center; font-size: 25px; color: black; background-color: #ac39ac; font-weight: bold;">
								<?php echo "Total Buyer: ".$totalBuyer; ?>
							</td>
							
						</tr>
					</table>
				</div>

				<br><br>

				<span style="font-size: 20px; color: forestgreen;display: flex;justify-content: center; align-content: center; font-weight: bold;">Most old Accounts</span>

				<hr>

				<div style="display: flex; justify-content: center; align-content: center;">
					
					<table border = 2px>
						<tr  style = "font-size: 20px;">
							<th style="text-align: center; background-color: #5d0502; color: white;">
								<?php echo "Category"; ?>
							</th>
							<th style="text-align: center;  background-color: #5d0502; color: white;">
								<?php echo "Username"; ?>
							</th>
							<th style="text-align: center;  background-color: #5d0502; color: white;">
								<?php echo "Join"; ?>
							</th>
						</tr>
						<tr style="color: blue; font-weight: bold;font-size: 20px;">
							<td style="text-align: center; background-color: #6666ff; color: black;">
								<?php echo "Moderator"; ?>
							</td>
							<td style="text-align: center; background-color: #6666ff; color: black;">
								<?php echo $bestModerator; ?>
							</td>
							<td style="text-align: center; background-color: #6666ff; color: black;">
								<?php echo $maxM; ?>
							</td>
							
						</tr>
						<tr style="color: purple; font-weight: bold;font-size: 20px;">
							<td style="text-align: center; background-color: #ac39ac; color: black;">
								<?php echo "Buyer"; ?>
							</td>
							<td style="text-align: center; background-color: #ac39ac; color: black;">
								<?php echo $bestBuyer; ?>
							</td>
							<td style="text-align: center; background-color: #ac39ac; color: black;">
								<?php echo $maxB; ?>
							</td>
							
						</tr>
						<tr style="color: deepskyblue; font-weight: bold;font-size: 20px;">
							<td style="text-align: center; background-color: #99e6ff; color: black;">
								<?php echo "Seller"; ?>
							</td>
							<td style="text-align: center; background-color: #99e6ff; color: black;">
								<?php echo $bestSeller; ?>
							</td>
							<td style="text-align: center; background-color: #99e6ff; color: black;">
								<?php echo $maxS; ?>
							</td>
							
						</tr>
					</table>
				</div>
			</fieldset>

			
		</div>
	</div>
	<br>
	

<?php include ("./Include/Footer.php"); ?>
</body>

</html>