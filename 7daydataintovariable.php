<?php
$api_url7='https://api.openweathermap.org/data/2.5/onecall?lat=27.6303797&lon=85.5303224&exclude=minutely,hourly&units=metric&appid=1c215dee610081253f5aed5fa38181f3';
$weather_data7=json_decode(file_get_contents($api_url7),true);
$temperature_in_celcius7 = $weather_data7['current']['temp'];
$temperature7 = round($temperature_in_celcius7);
$current_weather_description7 = $weather_data7['current']['weather'][0]['description']; 
$current_weather_icon7 = $weather_data7['current']['weather'][0]['icon'];
$pressure7= $weather_data7['current']['pressure'];
$humidity7 = $weather_data7['current']['humidity'];
$visibility7 = $weather_data7['current']['visibility'];
$wind_spd7 = $weather_data7['current']['wind_speed'];
$cloud7= $weather_data7['current']['clouds'];
$latitude7 = $weather_data7['lat'];
$longitude7 = $weather_data7['lon'];
$sunrise7= $weather_data7['current']['sunrise'];
$sunset7 = $weather_data7['current']['sunset'];
$time_zone7=$weather_data7['timezone'];
date_default_timezone_set($time_zone7);
$time7 = date("g:i");
$time72 = date("g : i A");
$date7 = date("Y-m-j");
$date72 = date("l, F d");
$day7= date("l,");
$dewpoint7=$weather_data7['current']['dew_point'];
$dewpoint7round=round($dewpoint7);
?>
