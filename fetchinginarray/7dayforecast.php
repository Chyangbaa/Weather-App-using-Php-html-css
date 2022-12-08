<?php
$api_url='https://api.openweathermap.org/data/2.5/onecall?lat=27.6303797&lon=85.5303224&exclude=minutely,hourly&units=metric&appid=1c215dee610081253f5aed5fa38181f3';
$weather_data=json_decode(file_get_contents($api_url),true);
$temperature_in_celcius = $weather_data['current']['temp'];
$current_weather_description = $weather_data['current']['weather'][0]['description']; 
$current_weather_icon = $weather_data['current']['weather'][0]['icon'];
$pressure = $weather_data['current']['pressure'];
$humidity = $weather_data['current']['humidity'];
$visibility = $weather_data['current']['visibility'];
$wind_spd = $weather_data['current']['wind_speed'];
$cloud = $weather_data['current']['clouds'];
$latitude = $weather_data['lat'];
$longitude = $weather_data['lon'];
$sunrise = $weather_data['current']['sunrise'];
$sunset = $weather_data['current']['sunset'];
$time_zone=$weather_data['timezone'];
date_default_timezone_set($time_zone);
$time = date("g:i");
$time1 = date("g : i A");
$date_ = date("Y-m-j");
$date1 = date("l, F d");
$day = date("l,");

echo "<pre>";
print_r($weather_data);
?>