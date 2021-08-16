<?php
	require("../Files/DatabaseOperations.php"); 
    $userName = "";
    $userNameErr = "";
    $flag = false;

    if($_SERVER['REQUEST_METHOD'] === "GET") {
        $userName = $_GET['searchText'];

        if(empty($userName)) {
	        $userNameErr = "Enter a username to search.";
	        $flag = true;
        }
        if(!$flag)
        {
        	$userName = test_input1($userName);

        	$fileData = searchUser($userName);

        	if($fileData->num_rows > 0)
        	{
        		echo "<p style='text-align: center; color: orangered; font-size: 17px bold;'><b>1. Search list</b></p>";

				echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
			    echo "<tr  style ='background-color: #29293d; color: white'>";
			    echo "<th>";
			    echo "Username";
			    echo "</th>";
			    echo "<th>";
			    echo "Account Type";
			    echo "</th>";
				echo "<th>";
			    echo "First name";
			    echo "</th>";
			    echo "<th>";
			    echo "Last name";
			    echo "</th>";
			    echo "<th>";
			    echo "Gender";
			    echo "</th>";
			    echo "<th>";
			    echo "Birthday";
			    echo "</th>";
			    echo "<th>";
			    echo "Email";
			    echo "</th>";
			    echo "<th>";
			    echo "Phone";
			    echo "</th>";
			    echo "<th>";
			    echo "Join";
			    echo "</th>";
			    echo "</tr>"; 
			    if(!empty($fileData)){
					foreach($fileData as $item) {
						echo "<tr style ='background-color: #b3b3cc;'>";
						echo "<td>";
						echo $item['userName'];
						echo "</td>";
						echo "<td>";
						echo $item['accountType'];
						echo "</td>";
						echo "<td>";
						echo $item['firstName'];
						echo "</td>";
						echo "<td>";
						echo $item['lastName'];
						echo "</td>";
						echo "<td>";
						echo $item['gender'];
						echo "</td>";
						echo "<td>";
						echo $item['birthday'];
						echo "</td>";
						echo "<td>";
						echo $item['email'];
						echo "</td>";
						echo "<td>";
						echo $item['phone'];
						echo "</td>";
						echo "<td>";
						echo $item['startTime'];
						echo "</td>";
						echo "</tr>";
						
				    }
				}
			    echo "</table>";
        	}
        	else
        	{
        		echo "<p style='text-align: center'>No user found.</p>";
        	}

		}  
    }

	function test_input1($data) {
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
    
?>