<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>PicYourWord | Sign Up</title>
		
		
	</head>
	<body>
	
	<?php include("dbmbconnect.php"); ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) ) { } 
  else { 
	$username = test_input($_POST["username"]); 
	$email = test_input($_POST["email"]); 
	$password = test_input($_POST["password"]); 

	$sql = "SELECT MAX(ID) FROM mbusers";
	$result = $conn->query($sql);

	$oldid = 0;
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		  $oldid = $row["id"];
	  }
	}
	$newid = $oldid + 1;
	
	$sql = "INSERT INTO mbusers (id, name, email, password) VALUES (".$newid.", '".$username."', '".$email."', '".$password."')";

	if ($conn->query($sql) === TRUE) {
	  echo "Welcome ". $username."<br>";
	} else {
	  echo "Error" . $conn->error;
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
	
	
		<div class="nav">
			<input type="button" class="top-button" value="Sign in" onclick="window.location='signin.php'">
		</div>
		<section class="login">
			<div class="up-container">
				<h3>Sign up</h3><br>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					<input type="text" placeholder="Username" name="keyword" value="<?php echo $keyword;?>"> <br><br>
					<input type="text" placeholder="Email Address" name="keyword" value="<?php echo $keyword;?>"> <br><br>
					<input type="password" placeholder="Password" name="keyword" value="<?php echo $keyword;?>"> <br><br><br>
					<input type="button" class="top-button" value="Join!" onclick="window.location='dashboard.php'">
				</form>
			</div>
		</section>			



	</body>
</html><?php  include("dbmbclose.php");  ?>