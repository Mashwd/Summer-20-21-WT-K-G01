<?php 
	require("../Files/DatabaseOperations.php"); 

    $userName = $password = $email = "";
    $userNameErr = $passwordErr = "";
    $successfulMessage = $errorMessage = "";
    $flag = false;
    $logFlag = false;

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $userName = $_POST['username'];
        $password = $_POST['password'];

        if(empty($userName)) {
	        $userNameErr = "Username can not be empty!";
	        $flag = true;
        }
        if(empty($password)) {
	        $passwordErr = "Password can not be empty!";
	        $flag = true;
        }
        if(!$flag)
        {
        	 $userName = test_input($userName);
        	 $password = trim(htmlspecialchars($password));

    		 $response = login($userName, $password);
    		 
    		 if($response === true)
    		 {
    		 	$candidate = getAccountType($userName);
    		 	if($candidate['accountType'] === "Admin") {
		    		$logFlag = True;
		    		session_start();
			    	$_SESSION['userName'] = $candidate['userName'];
			    	$_SESSION['accountType'] = $candidate['accountType'];

			    	$cookie_name = $candidate['firstName'] . " " . $candidate['lastName'];
					setcookie("cookie_name", $cookie_name, time() + 86400 * 30, "/e-commerce/");
			    	header('Location: /e-commerce/view/adminHome.php ');
		    	}
		    	else if($candidate['accountType'] === "Buyer"){
		    		echo "You are a Buyer";
		    		$logFlag = True;
		    			
	    		}
	    		else if($candidate['accountType'] === "Seller"){
	    			echo "You are a Seller";
	    			$logFlag = True;
	    		}
    		 }

		    if(!$logFlag)
		    {
		    	$errorMessage = "log-in failed.";
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
