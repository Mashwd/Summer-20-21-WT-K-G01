<?php
	session_start();

	include ("./Include/config.php");
	require("../Files/DatabaseOperations.php"); 	

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include ("./Include/title.php"); ?>
</head>
<body>
	<?php include ("./Include/Templete.php"); ?>
	<hr style="width: 35%; align-content: center;">
	<div style="display: flex; justify-content: center; align-content: center;">
		<fieldset style="border-radius: 20px;">
		<?php
			$fileData = getNotice();
			echo "<ul style='list-style-type:square';>";
			foreach ($fileData as $notice) {
				
				echo "<li>";
				echo "<span style = 'color:red;'>['".$notice['sender']."']</span>".": ".$notice['notice']."<span style = 'color:blue; float: right'>&nbsp&nbsp&nbsp&nbsp Sent: ".$notice['postTime']."</span>.";
				echo "</li>";
				echo "<hr>";
			}
			echo "</ul>";
		?>
		</fieldset>
	</div>

	<?php include ("./Include/Footer.php"); ?>

</body>
</html>