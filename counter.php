<?php

	// Connecting to the database
	$link = mysqli_connect("sql313.epizy.com", "epiz_25488931", "S5aOKuMK4dAI7fP", "epiz_25488931_iiitstudy");
    if($link === false)
	{
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	
	//echo "hi";
	$sql = "SELECT * FROM `view-counter` WHERE No='1'";
	$result = $link->query($sql);
	$row = $result->fetch_assoc();
	$count = $row['total-views'];
	$count++;
	$sql = "UPDATE `view-counter` SET `total-views`='$count'";
	$link->query($sql);
	
?>