<html>
  <head>
    <meta charset="UTF-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>PicYourWord | Dashboard</title>
	<style>
		.grid-container {
		  display: grid;
		  grid-gap: 50px 100px;
		  grid-template-columns: auto auto auto;
		}

		.grid-item {
		  width: 100%;
		  text-align: center;
		}	
		.dash-content{
			width: 100%;
			height: 100vh;
			display: flex;
			align-items: center;
			text-align: center;
		}
		.dash-container{

			width: 100%;
			margin: 0 auto;	

		}
		hr{
			width:70%;
			text-align:center;
		}
		.text-content{
			padding-top: 25vh;
			grid-column: 1 / span 3;
			align-items: left;
			text-align: left;			
		}
		.subcap{
			color:black;
			font-size:1vw;	
		}
		.cap{
			color:black;
			font-weight: bold;	
			font-size:2vw;			
		}
	</style>
  </head>
	<body class="dashboard">
		
		<div class="topnav">
		  <a><strong>Hello there!</strong></a>
		  <div class="topnav-right">
			<div class="hov">
				<a onclick="window.location='index.php'"><i class="fa fa-fw fa-user"></i>Sign Out</a>
			</div>
		  </div>
		</div>
		
		
		<section class="dash-content">
			<div class="dash-container">
				
				<div class="text-content">
					<p class="cap">Saved Mood Board</p>
					<hr>
					<p class="subcap">Check out all the past creations that you've saved</p>
				</div>
				
				<br><br>

				<div class="grid-container">
					<div class="grid-item"><img src="img\neon.jpg"></div>
					<div class="grid-item"><img src="img\feather.jpg"></div>
					<div class="grid-item"><img src="img\adventure.jpg"></div>
					<div class="grid-item"><img src="img\plus.jpg"></div>			
				</div>
			</div>
		<section>

	</body>
</html>

