<!DOCTYPE html>
<html lang="en">
  <head>

    <!--set of characters recognized by the computer
        UTF-8 is also identical to ASCII for English -->
    <meta charset="UTF-8">   
    <!-- the viewport is an HTML meta tag that is used to set styles and other
          website attributes to render the site on different devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>PicYourWord</title>

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
  <body><!--I moved colours to styles.css super-->
    <section class="intro">
      <div class="container">
        <h1>Create Your Own Mood Board</h1>
        <p>Bring your creative side to life with this assistive website curating a 
          complete mood board from one word.</p>

          <div class="search-container">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
              <input type="text" placeholder="What's your mood?" name="keyword" value="<?php echo $keyword;?>">
              <!--button type="submit"><i class="fa fa-search"></i></button-->
			  <input type="submit" name="submit" value="Picture Your Word">  
            </form>
          </div>
      </div>
    </section>
    
<?php

if($keyword == false)
{
}
else
{
	$search_url = 'https://ca.images.search.yahoo.com/search/images;_ylt=AwrE1yFolgNg0dwAQ3rrFAx.;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3BpdnM-?p='.$keyword;
	$content = file_get_contents($search_url);

	$pos2 = 1;
	$k = 1;
	for($offset = 1; $pos2 != false; $offset = $pos2+1) 
	{
		$pos1 = strpos($content, "data-src='", $offset);
		
		if($pos1 == false)
			break;
		
		$pos2 = strpos($content, "'",          $pos1+10);
		
		if($pos2 == false)
			break;
		
		$image_url = substr($content, $pos1+10, $pos2 - $pos1-10); 	
		
		if($k==1){  		  ?><table><tr><td><img src="<?=$image_url?>" width="300" height="300"><?php
		} else if ($k==2){    ?></td><td><img src="<?=$image_url?>" width="300" height="300"><?php
		} else if ($k==3){    ?></td></tr><tr><td><img src="<?=$image_url?>" width="600" height="200"><?php
		} else if ($k==4){    ?></td></tr><tr><td><img src="<?=$image_url?>" width="300" height="300"><?php
		} else if ($k==5){ 	  ?></td><td><img src="<?=$image_url?>" width="300" height="300"><?php
		} else if ($k==6){ 	  ?></td></tr></table><?php  break; 
		}
		
		  echo '' .  . '"   >' ;
		 
		 $k ++;
	}
}
?>

  </body>
</html>

