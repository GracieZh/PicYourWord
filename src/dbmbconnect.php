<?php

    $host_name  = "127.0.0.1:51845";
    $database   = "localdb";
    $user_name  = "azure";
    $password   = "6#vWHD_$";
	
	// Create connection
	$conn = new mysqli($host_name,$user_name,$password,$database);
						//$servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 	
?>