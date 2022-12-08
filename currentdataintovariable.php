<?php
$city_name = 'Banepa';
$my_api = '1c215dee610081253f5aed5fa38181f3';

$api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$my_api;

$weather_data = json_decode(file_get_contents($api_url), true);
$temperature = $weather_data['main']['temp'];
$temperature_in_celcius = round($temperature - 273.15);
$current_weather = $weather_data['weather'][0]['main'];
$current_weather_description = $weather_data['weather'][0]['description']; 
$current_weather_icon = $weather_data['weather'][0]['icon'];
$pressure = $weather_data['main']['pressure'];
$humidity = $weather_data['main']['humidity'];
$visibility = $weather_data['visibility'];
$wind_spd = $weather_data['wind']['speed'];
$cloud = $weather_data['clouds']['all'];
$country = $weather_data['sys']['country'];
$longitude = $weather_data['coord']['lon'];
$latitude = $weather_data['coord']['lat'];
$sunrise = $weather_data['sys']['sunrise'];
$sunset = $weather_data['sys']['sunset'];
date_default_timezone_set('Asia/Kathmandu');
$time = date("g:i");
$time1 = date("g : i A");
$date_ = date("Y-m-j");
$date1 = date("l, F d");
$day = date("l,");
?>