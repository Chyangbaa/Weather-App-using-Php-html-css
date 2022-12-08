<? php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="header.css?v=<?$version?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col">
				<div class="card card1">
					<h5> Weather Details</h5>
					<p>Check current temperature, pressure, humidity and many more !</p>
					<a href="final.php">Check</a>
				</div>
				<div class="card card2">
					<h5>Air Quality</h5>
					<p>Check air quality of current location !</p>
					<a href="airdetails.php">Check</a>
				</div>
				<div class="card card3">
					<h5>Historical Data</h5>
					<p>Pick a date and search for the data !</p>
					<a href="display.php">Check</a>
				</div>
				<div class="card card4">
					<h5>Search City</h5>
					<p>Input a city name and get current time and weather details !</p>
					<a href="searchlocation.php">Check</a>
				</div>
				
			</div>
			<div class="col2">
				<h1>WEATHER APP</h1>
				<p>The web based app containing current and historical weather data, air conditions, and many more details.</p>
				<a href="final.php">Explore</a>
			</div>


		</div>
	</div>
</body>
</html>










