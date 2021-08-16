<?php 
	
	require("../Files/DatabaseOperations.php");
	$fileData = getAllUser();
	
	if(empty($fileData))
	{
		$totalaccount = 0;
	}
	else
	{
		$totalaccount = $fileData->num_rows; 
	}

	//Admin list:
	echo "<p style='text-align: center; color: orangered; font-size: 17px bold;'><b>1. Admin list</b></p>";

	echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
    echo "<tr style='background-color: #ff8533'>";
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
			if($item['accountType'] === "Admin"){
				echo "<tr style ='background-color: #ffd1b3;'>";
				echo "<td >";
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
	}
    echo "</table>";
    ?>

    <h4 style="text-align:center; color: blue;">2. Moderator list</h4>

    <?php
    //Buyer List:

    echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
    echo "<tr style='background-color: #3385ff'>";
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
			if($item['accountType'] === "Moderator"){
				echo "<tr style ='background-color: #b3d1ff'>";
				echo "<td >";
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
	}
    echo "</table>";
    ?>

    <h4 style="text-align:center; color: purple;">2. Buyer list</h4>

    <?php
    //Buyer List:

    echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
    echo "<tr style='background-color: #c61aff'>";
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
			if($item['accountType'] === "Buyer"){
				echo "<tr style='background-color: #ecb3ff'>";
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
	}
    echo "</table>";
    ?>

    <h4 style="text-align:center; color: deepskyblue;">3. Seller list</h4>

    <?php

    //Seller List:

    echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
    echo "<tr style='background-color: #99ccff'>";
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
			if($item['accountType'] === "Seller"){
				echo "<tr   style='background-color: #e6f2ff'>";
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
    }
    echo "</table><br>";
			
		
	?>