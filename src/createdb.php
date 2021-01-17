<?php 
   // include("dbmbconnect.php"); 
   
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

	$sql = "CREATE TABLE mbusers (id int, name varchar(255), email varchar(255), password varchar(255))";

	if ($conn->query($sql) === TRUE) {
	  echo "Database created successfully<br>";
	} else {
	  echo "Error creating database: " . $conn->error;
	}
	
	$sql = "INSERT INTO mbusers (id, name, email, password) VALUES (1, 'Alice', 'Alice@hackthenorth.com', 'alicepass')";

	if ($conn->query($sql) === TRUE) {
	  echo "Database created successfully<br>";
	} else {
	  echo "Error creating database: " . $conn->error;
	}
	
	$sql = "SELECT id, name, email, password FROM mbusers";
	$result = $conn->query($sql);

	echo " num = " . $result->num_rows . "<br>";
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"] 
			. " - name: " . $row["name"]
			. " - email: " . $row["email"]
			. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	
	$conn->close();
	
?><?php 
// include("dbmbclose.php") 
?>