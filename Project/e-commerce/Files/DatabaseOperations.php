<?php 
	date_default_timezone_set('Asia/Dhaka');
	function connect()
	{
		$conn = new mysqli("localhost", "e-user", "123", "e-commerce");
		if($conn->connect_errno)
		{
			die("failed connection.. ". $conn->connect_errno);
		}
		return $conn;
	}

	function register($userName, $firstName, $lastName, $password, $email, $accountType, $gender, $phone, $birthday, $startTime)
	{
		$conn = connect();
		$sql = $conn->prepare("INSERT INTO users(userName, firstName, lastName, password, email, accountType, gender, phone, birthday, startTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$sql->bind_param("ssssssssss", $userName, $firstName, $lastName, $password, $email, $accountType, $gender, $phone, $birthday, $startTime);	
		addTransition($userName,"New account added", date('y-m-d h:i:s'));
		return $sql->execute();
	}

	function updateUser($userName, $firstName, $lastName, $password, $email, $gender, $phone, $birthday, $fileName)
	{
		$conn = connect();
		$sql = $conn->prepare("UPDATE users SET firstName = ?, lastName = ?, password = ?, email = ?, gender = ?, phone = ?, birthday = ?, fileName = ? WHERE userName = ?");
		$sql->bind_param("sssssssss", $firstName, $lastName, $password, $email, $gender, $phone, $birthday, $fileName, $userName);	
		return $sql->execute();
	}

	function login($userName, $password)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users WHERE userName = ? and password = ?");
		$sql->bind_param("ss", $userName, $password);
		$sql->execute();
		$res = $sql->get_result();
		return $res->num_rows === 1;
	}

	function findUser($userName)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users WHERE userName = ?");
		$sql->bind_param("s", $userName);
		$sql->execute();
		$res = $sql->get_result();
		return $res->num_rows === 1;
	}

	function getAccountType($userName)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users WHERE userName = ?");
		$sql->bind_param("s", $userName);
		$sql->execute();
		$res = $sql->get_result();
		$res = $res->fetch_assoc();
		return $res;
	}

	function searchUser($userName)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users WHERE userName LIKE ?");
		$userName = $userName.'%';
		$sql->bind_param("s", $userName);
		$sql->execute();
		$res = $sql->get_result();
		return $res;
	}

	function getAllUser()
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users");
		$sql->execute();
		$res = $sql->get_result();
		return $res;
	}

	function getNumberOfUser($accountType)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT userName FROM users WHERE accountType = ?");
		$sql->bind_param("s", $accountType);
		$sql->execute();
		$res = $sql->get_result();
		return $res->num_rows;
	}

	function getOldUser($accountType)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT userName, startTime FROM users WHERE startTime = (SELECT MIN(startTime) FROM users WHERE accountType = ?)");
		$sql->bind_param("s", $accountType);
		$sql->execute();
		$res = $sql->get_result();
		$res = $res->fetch_assoc();
		return $res;
	}

	function userInfo($userName)
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM users WHERE userName = ?");
		$sql->bind_param("s", $userName);
		$sql->execute();
		$res = $sql->get_result();
		$res = $res->fetch_assoc();
		return $res;
	}

	function postNotice($sender, $notice, $time)
	{
		$conn = connect();
		$sql = $conn->prepare("INSERT INTO notices(sender, notice, postTime) VALUES (?, ?, ?)");
		$sql->bind_param("sss", $sender, $notice, $time);
		addTransition("Admin", "New notice posted", date('y-m-d h:i:s'));
		return $sql->execute();
	}

	function getNotice()
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM notices");
		$sql->execute();
		$res = $sql->get_result();
		return $res;
	}

	function deleteUser($userName)
	{
		$conn = connect();
		$sql = $conn->prepare("DELETE FROM users WHERE userName = ?");
		$sql->bind_param("s", $userName);
		addTransition($userName,"account deleted", date('y-m-d h:i:s'));
		return $sql->execute();
	}

	function addTransition($accountType, $transition, $startTime)
	{
		$conn = connect();
		$sql = $conn->prepare("INSERT INTO transitions(executor, message, transitionTime) VALUES (?, ?, ?)");
		$sql->bind_param("sss", $accountType, $transition, $startTime);
		$sql->execute();
	}

	function getTransitions()
	{
		$conn = connect();
		$sql = $conn->prepare("SELECT * FROM transitions");
		$sql->execute();
		$res = $sql->get_result();
		return $res;
	}

?>