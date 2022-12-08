<?php
if(isset($_POST['submit'])){
$query = "insert into `weatherdetails`(`Date`, `Time`, `Day`, `City`, `Country`, `Temperature (Celsius)`, `Pressure`, `Humidity`, `Wind Speed`, `Cloudy`, `Description`, `Sunrise`, `Sunset`) values('$date_', '$time', '$day', '$city_name', '$country', '$temperature', '$pressure', '$humidity', '$wind_spd', '$cloud', '$current_weather_description', '$sunrise', '$sunset')" ;
    $result= mysqli_query($con, $query);
    if($result){
        ?>
        <script>
            alert('Data inserted successfully !');
        </script>
        <?php
    }else{?>
        <script>
            alert('Failed to Insert !');
        </script>
        <?php
    }
}
?>