<?php 
	session_start();
	require("../Files/DatabaseOperations.php"); 

	$logoutMsg = $notice = $noticeMsg = "";
	$bestModerator = $bestBuyer = $bestSeller = "";
	$totalModerator = $totalBuyer = $totalSeller = $totalAccount = 0;
	$maxM = $maxB = $maxS = "0000-00-00 00:00:00";

	if($_SERVER['REQUEST_METHOD'] === "POST") {

		if(isset($_POST['logout']))
		{ 
			session_destroy();
			$logoutMsg = "Successfully log-out.";
			header("Location: /e-commerce/Index.php? Msg= $logoutMsg");
		}
		if(!empty($_POST['notice'])){
			$notice = $_POST['notice'];
			$account = $_SESSION['accountType'];

	        $result1 = postNotice($account, $notice, date('y-m-d h:i:s'));
	        if($result1) {
	        	$noticeMsg = "Successfully posted.";
	        }
	        else {
	        	$errorMessage = "Error while posting.";
	        }
		}


	}
	    
	$totalModerator = getNumberOfUser("Moderator");
	$totalBuyer = getNumberOfUser("Buyer");
	$totalSeller = getNumberOfUser("Seller");
	    
	$totalAccount = $totalBuyer + $totalSeller + $totalModerator;

	$bestModerator = getOldUser("Moderator");
	if($bestModerator !== null){
		$maxM = $bestModerator['startTime'];
		$bestModerator = $bestModerator['userName'];
	}
	else
	{
		$bestModerator = "none";
	}

	$bestBuyer = getOldUser("Buyer");
	if(isset($bestBuyer)){
		$maxB = $bestBuyer['startTime'];
		$bestBuyer = $bestBuyer['userName'];
	}
	else
	{
		$bestBuyer = "none";
	}

	$bestSeller = getOldUser("Seller");
	if(isset($bestSeller)){
		$maxS = $bestSeller['startTime'];
		$bestSeller = $bestSeller['userName'];
	}
	else
	{
		$bestSeller = "none";
	}

?>
