<?php 
	session_start();

	require("../Files/DatabaseOperations.php");

    $firstName = $lastName =$phone = $accountType = $gender = $birthday = $userName = $password = $email = "";

	$candidate = userInfo($_SESSION['userName']);
	
	$firstName = $candidate['firstName'];
	$lastName = $candidate['lastName'];
	$gender = $candidate['gender'];
	$birthday = $candidate['birthday'];
	$userName = $candidate['userName'];
	$phone = $candidate['phone'];
	$email = $candidate['email'];
	$accountType = $candidate['accountType'];

	$dir = '../logo/attachments/'.$candidate['fileName']; // dir path assign here
  	$res = file_exists($dir);

	if($res == 0)
	{
		$profilePicture = "../logo/default.png";
	}
	else
	{
		$profilePicture = $dir;
	}

	
?>
