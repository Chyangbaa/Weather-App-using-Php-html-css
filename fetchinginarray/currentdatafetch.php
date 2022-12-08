<?php
$city_name = 'Banepa';
$api_key = '1c215dee610081253f5aed5fa38181f3';

$api_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

$weather_data = json_decode(file_get_contents($api_url), true);
echo "<pre>";
print_r($weather_data);
?>