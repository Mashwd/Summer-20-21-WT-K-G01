<?php 
	session_start();
	require("../Files/DatabaseOperations.php"); 

	$destination = "../logo/attachments/";
	

    $firstName = $lastName = $phone  = $birthday = $password = $oldPassword = $confirmPassword = $email = $gender = $filetype = "";
    
    $birthdayErr = $passwordErr = $emailErr = $firstNameErr = $lastNameErr = $oldPasswordErr = $confirmPasswordErr = $genderErr =  $attachmentErr = "";
    $successfulMessage = $errorMessage = $passSuccessfulMsg = $emailMsg = $passMsg = "";
    $flag = false;
    $flag1 = false;

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];  
        $birthday = $_POST['birthday'];
        $phone =$_POST['phone'];
        $email = $_POST['email'];      
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $oldPassword = $_POST['oldPassword'];

        if(empty($oldPassword) && empty($password) && empty($firstName) && empty($lastName) && empty($_POST['gender']) && empty($birthday) && empty($phone) && empty($email) && $_FILES['attachment']['error'] == 4)
	    {
	    	$flag = true;
	    	$errorMessage = "Nothing changed.";
	    }
	    else
	    {
	    	$filetype = explode("/", $_FILES['attachment']['type']);

	    	if($_FILES['attachment']['error'] == 0)
	    	{
	    		if($filetype[0] !== "image")
	    		{
	    			$flag = true;
	    			$attachmentErr = "Only image file allowed.(JPEG, GIF, PNG, etc.)";
	    		}
	    	}


	        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailMsg = "Invalid email format";
			  	$flag = true;
			}
			else{
				  	$flag1 = true;
			}
			if(!empty($oldPassword) || !empty($password) || !empty($confirmPassword)){
				$f = 0;
				if(empty($oldPassword))
				{
					$oldPasswordErr = "Old password can not be empty.";
					$flag = true;
					$f = 1;
				}
				if(empty($password)) {
					$passwordErr = "New password can not be empty.";
					$f = 1;
					$flag = true;
				}
				if(empty($confirmPassword)) {
					$confirmPasswordErr = "Confirm password can not be empty.";
					$f = 1;
					$flag = true;
				}
				if($f == 0)
				{
					$fileData = userInfo($_SESSION['userName']);

					if($oldPassword !== $fileData['password'])
					{
						$oldPasswordErr = "Wrong Password";
						$flag = true;
					}
					else
					{
						if($password === $confirmPassword)
						{
							if($oldPassword === $password)
							{
								$passwordErr = "Password is already using now";
								$flag = true;
							}
							else
							{
								$number = preg_match('@[0-9]@', $password);
							 
								if(strlen($password) < 6  || !$number) {
								    $passMsg = "Password must be at least 6 characters in length and must contain at least one number.";
								    $flag = true;
								} 
								else {	
								    $passSuccessfulMsg = "Changed.";
								    $oldPassword = "";
								    $confirmPassword = "";
								}
							}
						}
						else
						{
							$confirmPasswordErr = "Didn't match";
							$flag = true;
						}
					}
				}  
		    }
		}



        if(!$flag) {
	        $firstName = test_input($firstName);
	        $lastName = test_input($lastName);
	        $phone = test_input($phone);
	        $email = test_input($email);
	        if(!empty($_POST['gender']))
	        	$gender = $_POST['gender'];
	        

			$fileData = userInfo($_SESSION['userName']);
			
			if(count($fileData) > 0)
			{
				if(!empty($firstName))
					$fileData['firstName'] = $firstName;
				if(!empty($lastName))
					$fileData['lastName'] = $lastName;
				if(!empty($birthday))
					$fileData['birthday'] = $birthday;
				if(!empty($userName)){
					$fileData['userName'] = $userName;
					$_SESSION['userName'] = $userName;
				}
				if(!empty($password))
					$fileData['password'] = $password;
				if(!empty($gender))
					$fileData['gender'] = $gender;
				if(!empty($phone))
					$fileData['phone'] = $phone;
				if(!empty($email))
					$fileData['email'] = $email;
				if ($_FILES['attachment']['error'] == 0 && $filetype[0] === "image") {
						
						$filename = explode(".", $_FILES['attachment']['name']);
						$tmp_name = $_FILES['attachment']['tmp_name'];

						move_uploaded_file($tmp_name, $destination . "" . $_SESSION['userName'].".".$filename[1]);

						$filename = $_SESSION['userName'].".".$filename[1];

						if(empty($fileData['fileName']))
						{
							$fileData['fileName'] = $filename;
						}
						else
						{
							if($fileData['fileName'] === $filename)
								$fileData['fileName'] = $filename;
							else
							{
								$temp = $fileData['fileName'];
								$fileData['fileName'] = $filename;
								if (file_exists($destination.$temp)){
								    unlink($destination.$temp);
								}
							}
						}
					}
			}
			
			//edit data update

	        $result1 = updateUser($fileData['userName'], $fileData['firstName'], $fileData['lastName'], $fileData['password'], $fileData['email'], $fileData['gender'], $fileData['phone'], $fileData['birthday'], $fileData['fileName']);

	        if($result1) {
	        	$password = "";
	        	$successfulMessage = "Successfully saved.";
	        }
	        else {
	        	$errorMessage = "Error while saving.";
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
