<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>PicYourWord | Home</title>
  </head>
<?php

$name = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["keyword"])) {
  } else {
    $keyword = test_input($_POST["keyword"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
  <body>

  
    
    <section class="intro">
		<div class="container">  
			<div class="grid-item"></div>
			
			<div class="grid-item">
				<div class="nav">
					<input type="button" class="top-button" value="Sign In" onclick="window.location='signin.php'">
					&nbsp; &nbsp;
					<input type="button" class="top-button" value="Join Now" onclick="window.location='signup.php'">
				</div>
			</div>
			
			<div>
				<h1>Create Your Own Mood Board</h1>
				<h2>Bring your creative side to life with this assistive website curating a 
					complete mood board from one word.</h2>
				<div class="search-container">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
						<input type="text" placeholder="Type a word to get started" name="keyword" value="<?php echo $keyword;?>">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>	
				<p>Suggested: Neon, Adventure, Apples, Feather, and more</p>				
			</div>
			<div class="grid-item">
				<img class="cover_image" src="img\cover-image.png">
			</div>		
		</div>
	</section>

	<section class="images-panel">    

		<?php

		if($keyword == false)
		{
		}
		else
		{
			$search_url = 'https://ca.images.search.yahoo.com/search/images;_ylt=AwrE1yFolgNg0dwAQ3rrFAx.;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p='.$keyword;
			$content = file_get_contents($search_url);

			$pos2 = 1;
			
			for($offset = 1; $pos2 != false; $offset = $pos2+1) 
			{
				$pos1 = strpos($content, "data-src='", $offset);
				
				if($pos1 == false)
					break;
				
				$pos2 = strpos($content, "'",          $pos1+10);
				
				if($pos2 == false)
					break;
				
				$image_url = substr($content, $pos1+10, $pos2 - $pos1-10); 	
				
				 echo '<img src="' . $image_url . '" class="myimg">' ;

			}


		}
		?>
	</section>

  </body>
</html>

