<?php 
// if(isset($_POST['submit'])){

// }
define("filepath", "../view/json/review.json");
$review="";
$reviewErr="";
$isValid = true;
$successfulMessage = $errorMessage = "";
if($_SERVER['REQUEST_METHOD'] === "POST") {
	$review=$_POST['review'];
	if(empty($review)){
			$reviewErr="Review box is empty!";
			$isValid=false;

		}
	if($isValid){
		$review=test_input($review);
		$filedata="../view/json/review.json";
		if(file_exists('../view/json/review.json')){
			$current_data = file_get_contents('../view/json/review.json');
				$array_data=json_decode($current_data,true);
				$arr1=array("review" => $review);

		}
			$array_data [] =$arr1;
			$final_data =json_encode($array_data);
			
		
			if(file_put_contents('../view/json/review.json', $final_data)) {
				$successfulMessage = "Successfull";
			}
			else {
				$errorMessage = "Error .";
			}
	}

	
		
		
}
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


?>
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

	<form id="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Review</legend>
			<label for="review"> Enter Your Review: </label>
			<textarea id="review" name="review" ></textarea>
			<span style="color:red"><?php echo $reviewErr;?></span>


	

		</fieldset>
		<br>
		<input type="submit" name="submit" value="submit">

		
	</form>
	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;" id="errorMessage"><?php echo $errorMessage; ?></p>
	<br>

	<br><br>
	<?php 
	 include 'logout-include.php' ?>
	 <br>
	 <?php 
	 include 'footer.php' ?>
	

	

</body>
</html>
