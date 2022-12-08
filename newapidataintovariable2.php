<?php
$city_name = 'Banepa';
$api_key = '400c6c63f42e405c99812334220311';
if(isset($_POST['search'])){
	$city_name = $_POST['locationname'];
}

$api_url = 'http://api.weatherapi.com/v1/forecast.json?key='.$api_key.'&q='.$city_name.'&aqi=yes&alerts=yes';
$weather_data = json_decode(file_get_contents($api_url), true);
$temperature_notround = $weather_data['current']['temp_c'];
$temperature = round($temperature_notround);
$temperature = $weather_data['current']['temp_c'];
$current_weather_description = $weather_data['current']['condition']['text'];
$current_weather_icon = $weather_data['current']['condition']['icon'];
$pressure = $weather_data['current']['pressure_mb'];
$humidity = $weather_data['current']['humidity'];
$visibility = $weather_data['current']['vis_km'];
$wind_spd = $weather_data['current']['wind_kph'];
$cloud = $weather_data['current']['cloud'];
$latitude = $weather_data['location']['lat'];
$longitude = $weather_data['location']['lon'];
$sunrise = $weather_data['forecast']['forecastday'][0]['astro']['sunrise'];
$sunset = $weather_data['forecast']['forecastday'][0]['astro']['sunset'];
$time_zone=$weather_data['location']['tz_id'];
date_default_timezone_set($time_zone);
$time = date("g:i");
$time1 = date("g : i A");
$date_ = date("Y-m-j");
$date1 = date("l, F d");
$day = date("l");

$city_name= $weather_data['location']['name'];
$country=$weather_data['location']['country'];
$maxtemp_notround = $weather_data['forecast']['forecastday'][0]['day']['maxtemp_c'];
$mintemp_notround = $weather_data['forecast']['forecastday'][0]['day']['mintemp_c'];
$maxtemp = round($maxtemp_notround);
$mintemp= round($mintemp_notround);
$uv= $weather_data['current']['uv'];
$wind_dir = $weather_data['current']['wind_dir'];
$precipitation = $weather_data['current']['precip_in'];
$moonrise = $weather_data['forecast']['forecastday'][0]['astro']['moonrise'];
$moonset = $weather_data['forecast']['forecastday'][0]['astro']['moonset'];
?>
