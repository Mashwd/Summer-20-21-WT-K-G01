<?php
	session_start(); 
	require("../Files/DatabaseOperations.php"); 

    $userName = "";
    $userNameErr = "";
    $successfulMessage = $errorMessage = "";
    $flag = false;
    $check = false;
    $position = 0;

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $userName = $_POST['deleteText'];

        if(empty($userName)) {
	        //$userNameErr = "Enter a username to delete.";
	        $flag = true;
        }
        if(!$flag)
        {
        	$userName = test_input($userName);

        	 
		    if($_SESSION['userName'] === $userName)
		    {
		    	echo "2";
		    }
		    else if(findUser($userName) != 1)
		    {
		    	echo "0";
		    }
		    else
		    {
		    	deleteUser($userName);
		    	echo "1";
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