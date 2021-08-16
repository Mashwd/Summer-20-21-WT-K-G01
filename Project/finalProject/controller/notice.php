
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notice</title>
	<link rel="stylesheet" type="text/css" href="../view/css/TempleteStyle.css">
	<link rel="stylesheet" type="text/css" href="../view/css/table.css">
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
	<div id="b1">
			<span style="color: white;"><?php 
	 include 'homepage-include.php' ?></span>
	</div>

	<hr style="display: block; width: 100%;">	
	<form>
		<h1>
		<fieldset>
			<legend>Notice</legend>
			<?php 
	define("filepath", "../view/json/notice.json");
	function read() {
		$resource = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($resource, $fz);
		}
		fclose($resource);
		return $fr;
	} 
	$data = read();
	$data =json_decode($data);

	foreach ($data as $data ) {
		// code...
		echo '<li>'."notice:"."\t". $data->notice . '</li>';
		
	}
	
	?>

    </h1>


		</fieldset>
		<?php 
	 include 'footer.php' ?>
		
	</form>

	

</body>
</html>
