<?php 
include 'sidebar.html';
include 'config.php';
include 'newapidataintovariable.php';
include 'connection.php';
include '7daydataintovariable.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weather App</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
</head>
<body>
 <div class="weather-app">
            <div class="minmax">
            <p>Min: <?php echo $mintemp;?>&#176</p>
            <p>Max: <?php echo $maxtemp;?>&#176</p>
            <p>Dew Point: <?php echo $dewpoint7round;?>&#176</p>
            <p>UV: <?php echo $uv;?></p>
            </div>
            <div class="temp">
                <h3><?php echo $temperature."&#176C";?></h3>
            </div>
            <div class="timezone">
                <h3>Banepa</h3>
                <h4><?php echo $time_zone;?></h4>
            </div>
            <div class="time">
                <h3><?php echo $time1;?></h3>
                <div class="date"><?php echo $date1;?></div>
            </div>
            <div class="current-weather">
                 <?php echo "<img src=$current_weather_icon>";?>
                <h2><?php echo $current_weather_description;?></h2>
            </div>

    <div class="panel">
        
        <ul class="details">
            <h4>Weather Details</h4>
            <li>
                <span>Cloudy</span>
                <span class="cloud"><?php echo $cloud."%";?></span>
            </li>
            <li>
                <span>Humidity</span>
                <span class="humidity"><?php echo $humidity."%";?></span>
            </li>
            <li>
                <span>Wind Speed</span>
                <span class="wind"><?php echo $wind_spd." K/h";?></span>
            </li>
            <li>
                <span>Wind Direction</span>
                <span class="wind_direction"><?php echo $wind_dir;?></span>
            </li>
            <li>
                <span>Pressure</span>
                <span class="pressure"><?php echo $pressure;?></span>
            </li>
            <li>
                <span>Precipitation[in]</span>
                <span class="Precipitation"><?php echo $precipitation;?></span>
            </li>
            
            <li>
                <span>Visibility[In KM]</span>
                <span class="visibility"><?php echo $visibility;?></span>
            </li>
         <h5>Astrology</h5>
            <li>
                <span>Sunrise</span>
                <span class="sunrise"><?php echo $sunrise;?></span>
            </li>
            <li>
                <span>Sunset</span>
                <span class="sunset"><?php echo $sunset;?></span>
            </li>
            <li>
                <span>Moonrise</span>
                <span ><?php echo $moonrise;?></span>
            </li>
            <li>
                <span>Moonset</span>
                <span><?php echo $moonset;?></span>
            </li>
        </ul>
            <form action="" method="POST">
                <button type="submit" class="submit" name="submit">Save Details</button>
            </form>
    </div> 
</div>
</body>
</html>


<?php
include 'insert.php';
?>