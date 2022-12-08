<?php 
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@400;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="display1.css?v=<?=$version?>">
	<title>Browse History</title>
</head>
<body>
			<a href="final.php"><i class="fa fa-angle-double-left" id="back"></i></a>
	<div class="datepicker">

		<h1>Historical Weather Data</h1>
		<p>Choose Date</p>
		<form action="search.php" method="POST" class="search-bar">
			<input type="date" placeholder="Choose Date..." name="datepick" >
			<button type="submit" name="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
			<table class="content-table">
				<?php
					include 'connection.php';
					if(isset($_SESSION['search'])){
						$id = $_SESSION['search'];
						$datequery = "SELECT * FROM weatherdetails where Date ='$id'";
					}
					else{
						$datequery = "SELECT * from weatherdetails";
					}
					$query = mysqli_query($con, $datequery);
					$nums = mysqli_num_rows($query);
					if($nums > 0) {
				?>
				<thead>
					<tr>
						<th>Date</th>
						<th>Time</th>
						<th>Day</th>
						<th>City</th>
						<th>Country</th>
						<th>Temperature</th>
						<th>Pressure</th>
						<th>Humidity</th>
						<th>Wind Speed</th>
						<th>Cloudy</th>
						<th>Description</th>
						<th>Sunrise</th>
						<th>Sunset</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($array = mysqli_fetch_array($query)) {
						?>
						<tr>
						<td><?php echo $array['Date'];?></td>
						<td><?php echo $array['Time'];?></td>
						<td><?php echo $array['Day'];?></td>
						<td><?php echo $array['City'];?></td>
						<td><?php echo $array['Country'];?></td>
						<td><?php echo $array['Temperature (Celsius)'];?></td>
						<td><?php echo $array['Pressure'];?></td>
						<td><?php echo $array['Humidity'];?></td>
						<td><?php echo $array['Wind Speed'];?></td>
						<td><?php echo $array['Cloudy'];?></td>
						<td><?php echo $array['Description'];?></td>
						<td><?php echo $array['Sunrise'];?></td>
						<td><?php echo $array['Sunset'];?></td>

<?php

	}
} else echo "No data recorded";

?>
				</tbody>
			</table>
</body>
</html>