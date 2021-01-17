<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) { } 
  else { 
	$uname = test_input($_POST["uname"]); 
	$cookie_name = "userName";
	$cookie_value = $uname;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }
}

?><html>
  <head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PicYourWord | Sign In</title>
  </head>
	<body >
		<div class="nav">
			<input type="button" class="top-button" value="Join Now" onclick="window.location='signup.php'">
		</div>
		<section class="login">
			<div class="up-container">
				<h3>Sign in</h3><br>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					<input type="text" placeholder="username/your email" name="uname" value="<?php echo $keyword;?>"> <br><br>
					<input type="password" placeholder="**********" name="keyword" value="<?php echo $keyword;?>"> <br><br><br>
					<input type="button" class="top-button" value="Sign In" onclick="window.location='dashboard.php'">
				</form>
			</div>
		</section>
	</body>
</html>