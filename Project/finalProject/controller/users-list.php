<?php 
	session_start();
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : ""; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users List</title>
</head>
<body>

	<h1>Users List</h1>

	<?php 
		define("filepath", "user.json");
		if($userId === "IAMZ1SAN") {
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

			$users_list = read();
			$users_list_array = explode("\n", $users_list);
			echo "<table>";
			echo "<tr><th>Full Name</th>";
			echo "<th>User Name</th>";
			echo "<th>Password</th></tr>";
			for($i = 0; $i < count($users_list_array) - 1; $i++) {
				$users_list_array_decode = json_decode($users_list_array[$i]);
				echo "<tr>";
				echo "<td>" . $users_list_array_decode->fullname . "</td>";
				echo "<td>" . $users_list_array_decode->username . "</td>";
				echo "<td>" . $users_list_array_decode->password . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else {
			echo "<h3 style='color:red;'>Unauthorized Access</h3>";
		}

	?>
	<br>
	<p>Click here to <a href="home-page.php">Home</a></p>
	<p>Click here to <a href="logout.php">Logout</a></p>

</body>
</html>