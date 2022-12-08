<?php
$city_name = 'Banepa';
$api_key = '400c6c63f42e405c99812334220311';

$api_url = 'http://api.weatherapi.com/v1/forecast.json?key='.$api_key.'&q='.$city_name.'&aqi=yes&alerts=yes';

$weather_data = json_decode(file_get_contents($api_url), true);
echo "<pre>";
print_r($weather_data);
?>
