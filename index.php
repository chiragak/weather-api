<!DOCTYPE html>
<html>
<head>
<title>Weather Report</title>
<style>
body {
font-family: Arial, sans-serif;
}
.container {
max-width: 500px; margin: 0 auto; padding: 20px;
border: 1px solid #ccc; border-radius: 5px;
}
h1 {
text-align: center;
}
.weather-info { margin-top: 20px;
}
.weather-info p { margin: 10px 0;
}
</style>
</head>
<body>
<div class="container">
<h1>Weather Report</h1>
<div class="weather-info">
<?php
// API configuration
$api_key = ''; // Replace with your API key
$city = 'Mangaluru'; // Replace with desired city name
$api_url ="https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key&units=imperial";
// Fetch weather data from API
$json_data = file_get_contents($api_url);
$weather_data = json_decode($json_data);
// Display weather information
if ($weather_data) {
$temp = $weather_data->main->temp;
$humidity = $weather_data->main->humidity;
$description = $weather_data->weather[0]->description; echo
"<p><strong>City:</strong> $city</p>";
echo "<p><strong>Temperature:</strong> $temp &deg;C</p>"; echo
"<p><strong>Humidity:</strong> $humidity%</p>";
echo "<p><strong>Description:</strong> $description</p>";
} else {
echo "<p>Failed to fetch weather data.</p>";
}
?>
</div>
</div>
</body>
</html>