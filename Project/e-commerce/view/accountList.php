<?php 
	include ("./Include/config.php");
	require("../Controller/deletehandler.php"); 
	//require("../Controller/searchhandler.php");
	

	$fileData = getAllUser();
	
	if(empty($fileData))
	{
		$totalaccount = 0;
	}
	else
	{
		$totalaccount = $fileData->num_rows; 
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include ("./Include/title.php"); ?>
	<link rel="stylesheet" type="text/css" href="./CSS/accountListStyle.css">
	<script type="text/javascript" src="./JS/accountList.js"></script>
</head>
<body style="background: #F3F3F3;" onload="allAccount()">

	<div class="alert" id="a1">
		  <span class="closebtn" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  <strong>Error!</strong>Username not found.
	</div>

	<div class="alert1" id="a2">
		  <span class="closebtn1" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  <strong>Error!</strong>Admin account can't be deleted.
	</div>

	<div class="alert2" id="a3">
		  <span class="closebtn2" onclick="this.parentElement.style.display = 'none'">&times;</span> 
		  <strong>!!</strong>Successfully deleted.
	</div>

	<?php include ("./Include/Templete.php"); ?>

	<div style="display: grid; place-items: center center;"> 

		<hr style="height: 1px; width: 50%; background-color: seagreen; ">
		
		<fieldset style="border-radius: 10px; border-width: 2px; border-color: seagreen;">

			<div>

			<form style="display: inline-flex;" method = "POST" autocomplete="off" name = "deleteForm" onsubmit="return isValid();">

				<label for = "deleteText" style="font-weight: bold;">Delete:</label>
				<input type="text" name="deleteText" id="deleteText" placeholder="Enter username">

				<input type="submit" name="delete" value="delete" id="delete">

				<!-- <span style="color: green;" id="confirmation"><?php //echo $successfulMessage; ?></span>

				<span style="color: red;"  id="deleteError"><?php //echo $errorMessage.$userNameErr; ?></span> -->

			</form>

			<form style="display: inline-flex; margin-left: 15px; margin-right: 15px" action="../Controller/searchhandler.php" method = "GET" autocomplete="off" name = "searchForm" onsubmit="return isValidSearch(this);">
				<label for = "searchText" style="font-weight: bold;">Search:</label>
				<input type="text" name="searchText" id="searchText" placeholder="Enter username">

				<input type="submit" name="search" value="search" id="search">

				<!-- <span style="color: green;"><?php //echo $searchMessage; ?></span>
				<span style="color: red;" id ="searchError"><?php //echo $searchErr; ?></span>
 -->		</form>

 			<button onclick="allAccount()" id="refresh">Refresh List</button>
 			</div>	
 			<span style="float: right;">total account: <?php echo $totalaccount?></span><br>
 			<br>		

			<div id="alluser" style="overflow-y: scroll; height:400px;">
				
			</div>
			
			
	</fieldset>

</div>
	<?php include ("./Include/Footer.php"); ?>
</body>
</html>