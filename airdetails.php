<?php

include 'config.php';
include 'newapidataintovariable.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Air quality</title>
	<link rel="stylesheet" type="text/css" href="airdetails.css?v=<?$version?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
</head>
<body>
	<h1><a href="final.php"><i class=" 	fa fa-angle-double-left" id="back"></i></a>Air Quality</h1>
	<div class="container">
	
	<ul class="air">
		<li>
			<span> Carbon Monoxide</span>
			<span><?php echo $coround;?> μg/m3</span>
		</li>
		<li>
			<span>Nitrogen dioxide</span>
			<span><?php echo $no2round;?> μg/m3</span>
		</li>
		<li>
			<span>Ozone</span>
			<span><?php echo $o3round;?> μg/m3</span>
		</li>
		<li>
			<span>Sulphur dioxide</span>
			<span><?php echo $so2round;?> μg/m3</span>
		</li>
	</ul>
	</div>
</body>
</html>